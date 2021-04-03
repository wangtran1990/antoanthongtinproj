<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PromotionModel;

class Promotion extends Controller
{
  private $pageTitle;

  public function __construct()
  {
    $this->pageTitle = 'Promotion';
  }

  public function index()
  {
    $session = session();
    $page["session"] = $session;
    $page['page_title'] = $this->pageTitle;
    $model = new PromotionModel();

    $phone = $this->request->getVar('phone');

    if (!$phone) {
      $page['list'] = $model->find();
    } else {
      $page['list'] = $model->where('phone', $phone)->findAll();;
    }
    echo view('promotion', $page);
  }

  public function add()
  {

    //include helper form
    helper(['form']);
    $session = session();
    $page["session"] = $session;
    $page['page_title'] = $this->pageTitle;
    echo view('add', $page);
  }

  private function validate_mobile($mobile)
  {
    return preg_match('/^[0-9]{10}+$/', $mobile);
  }

  public function save()
  {
    $session = session();
    //include helper form
    helper(['form']);
    //set rules validation form
    $rules = [
      'phone'          => 'required|min_length[10]',
      'promotion_code'         => 'required'
    ];

    if ($this->validate($rules)) {
      $model = new PromotionModel();
      $phone = $this->request->getVar('phone');
      $promotion_code = $this->request->getVar('promotion_code');
      $data = $model->where('promotion_code', $promotion_code)->first();
      if ($data) {
        $session->setFlashdata('msg', 'Mã khuyến mãi đã tồn tại');
        return redirect()->to('/promotion/add');
      }
      $data = [
        'phone'     => $phone,
        'promotion_code'    => $promotion_code
      ];
      $model->save($data);
      return redirect()->to('/promotion');
    } else {
      $data['validation'] = $this->validator;
      $data['page_title'] = $this->pageTitle;
      $data["session"] = $session;
      echo view('add', $data);
    }
  }
}
