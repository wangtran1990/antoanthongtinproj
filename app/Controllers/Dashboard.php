<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
  public function index()
  {
    $session = session();
    $page["session"] = $session;
    $page['page_title'] = 'Dashboard';
    echo view('dashboard', $page);
  }
}
