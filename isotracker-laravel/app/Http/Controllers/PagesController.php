<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

  public function index() {
      return view('pages.home');
  }

	public function admin()
	{
		return view('pages.admin');
	}

  public function summary()
  {
    return view('pages.summary');
  }

  public function user()
  {
    return view('pages.user');
  }

  public function audits()
  {
    return view('pages.audits');
  }

  public function complaints()
  {
    return view('pages.complaints');
  }

  public function documents(){
    return view('pages.documents');
  }

  public function review(){
    return view('pages.review');
  }

  public function competency(){
    return view('pages.competency');
  }

  public function reports(){
    return view('pages.reports');
  }

  public function showReports($report)
  {
    return view('reports.report_'.$report);
  }

  public function showAdminModules($module)
  {
    return view('admin.admin_'.$module);
  }

}
