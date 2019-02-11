<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'name_of_firm',
        'trade_name',
        'duns_num',
        'p_dunms_num',
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'phone',
        'fax',
        'email',
        'www_page',
        'ecom_website',
        'county_code',
        'cong_district',
        'ms_area',
        'cage_code',
        'established_year',
        'gsa_contact',
        'ownershop',
        'sba_8a_num',
        'sba_8a_ent',
        'sba_8a_exit',
        'ishubzone_cert',
        'hubsone_certdate',
        '8a_jv_ent',
        '8a_jv_exit',
        'naics_table',
        'keywords',
        'performance_history',
        'list_id',
        'quality_assurance',
        'electronic_data',
        'export_business_activity',
        'exporting_to',
        'bonding_agg',
        'bonding_cont',
        'con_bonding_agg',
        'con_bonding_cont',
        'accept_card',
        'desired_export_business',
        'export_descrption',
        'business_office',
        'naics',
        'economic_id'
    ];
}
