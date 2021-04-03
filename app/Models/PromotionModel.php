<?php

namespace App\Models;

use CodeIgniter\Model;

class PromotionModel extends Model
{
  protected $table = 'promotions';
  protected $allowedFields = ['promotion_code', 'phone', 'created_at'];
}
