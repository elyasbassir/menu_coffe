<?php

namespace App\Http\Controllers;

use App\Models\coffee_shops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\payment as payment_model;
use RealRashid\SweetAlert\Facades\Alert;

class payment extends Controller
{
    public function call_back($payment_id, Request $request)
    {
        $payment_data = payment_model::where('payment_id', $payment_id)->where('user_id', Auth::user()->user_id)->get();
        if ($payment_data->count() < 1) {
            return "خطا در فرایند پیدا کردند فاکتور";
        }
        if ($payment_data->value('payed') == true) {
            return "این فاکتور یک بار پردازش شده است";
        }
        $authority = request()->query('Authority');
        $status = request()->query('Status');

        $response = zarinpal()
            ->amount($payment_data->value('price'))
            ->verification()
            ->authority($authority)
            ->send();
        if (!$response->success()) {
            Alert::error($response->error()->message());
            return redirect()->route('owner.setting');
        }

        $days = $payment_data->value('days');
        $coffee_code = Auth::user()->coffee_code;
        $data_coffee = coffee_shops::where('coffee_code', $coffee_code)->get();
        $days = verta()->diffDays(verta($data_coffee->value('expire_subscription'))->formatGregorian('Y-n-j'), false);
        if ($days < 0) {
            $days = 0;
        }
        $days += $payment_data->value('days');

        coffee_shops::where('coffee_code', $coffee_code)->update([
            'expire_subscription' => verta("+$days day")->toCarbon(),
        ]);
        payment_model::where('payment_id', $payment_id)->where('user_id', Auth::user()->user_id)->update([
            'referenceId' => $response->referenceId(),
            'payed' => true,
        ]);
    Alert::success('اشتراک با موفقیت افزوده شد.');
        return redirect()->route('owner.setting');
    }

    public function redirect_to_bank(Request $request)
    {
        $validation = $request->validate([
            'plan' => 'required|max:80',
        ]);
        $plan = $request->get('plan');
        $amount = (int)0;
        $description = (string)"خرید پلن منو شاپ";
        $callbackUrl = (string)"";
        $days = (int)0;
        $mobile = (string)Auth::user()->phone;
        switch ($plan) {
            case "plan_silver":
                $amount = 260000;
                $days = (3 * 30);
                break;
            case "plan_gold":
                $amount = 1010000;
                $days = (12 * 30);
                break;
            case "plan_medium":
                $amount = 95000;
                $days = 30;
                break;
            default:
                return redirect()->back();
        }
        $payment_id = md5(uniqid() . time());
        $new_payment = new payment_model();
        $new_payment->payment_id = $payment_id;
        $new_payment->user_id = Auth::user()->user_id;
        $new_payment->price = $amount;
        $new_payment->payed = false;
        $new_payment->time = verta()->toCarbon();
        $new_payment->referenceId = "";
        $new_payment->days = $days;
        $new_payment->save();
        $callbackUrl = route('owner.call_back', $payment_id);
        $response = zarinpal()
            ->amount($amount) // مبلغ تراکنش
            ->request($callbackUrl)
            ->description($description) // توضیحات تراکنش
            ->callbackUrl($callbackUrl) // آدرس برگشت پس از پرداخت
            ->mobile($mobile) // شماره موبایل مشتری - اختیاری
            ->send();
        if (!$response->success()) {
            return $response->error()->message();
        }
        return $response->redirect();
    }


}
