<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WardBursaryModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'wardbursaryapplication';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'family_name',
        'email_address',
        'identifidation_number',
        'schoolname',
        'schoolcategory',
        'admissionnumber',
        'joineddate',
        'yearofadmission',
        'durationofstudy',
        'coursename',
        'feesbalance',
        'feesattachmentpath',
        'admissionletterpath',
        'latestresultspath',
    ];
}
