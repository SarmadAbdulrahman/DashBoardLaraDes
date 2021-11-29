<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadFlowUp extends Model
{
    use HasFactory;

    protected $fillable= ['MessageToLead','Response','lead_id','EvaluationCall'];
}
