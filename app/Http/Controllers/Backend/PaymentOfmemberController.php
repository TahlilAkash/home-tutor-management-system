<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class PaymentOfmemberController extends Controller
{
    public function view_student_payment(){
        $paidStudent=Member::where('role','student')->where('status', 'confirm')->get();
        return view('admin.pages.admin-view-payment.view_student_payment_list',compact('paidStudent'));
    }

    public function view_teacher_payment(){
        $paidTeacher=Member::where('role','teacher')->where('status', 'confirm')->get();
        return view('admin.pages.admin-view-payment.view_teacher_payment_list',compact('paidTeacher'));
    }

}
