<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportMonthFaskes extends Model
{
    protected $table = 'riportmonthfaskes';
    protected $primaryKey = 'id';
    protected $useTimesTamps = true;
    protected $dateFormat = 'date';
    protected $allowedFields = [
        'name',
        'name_faskes',
        'address',
        'puskesmas',
        'name_laporan',
        'catatan',
        'file',
        'date'
    ];

    public function findAllByPuskesmas($puskesmas)
    {
        return $this->where('puskesmas', $puskesmas)->findAll();
    }
}
