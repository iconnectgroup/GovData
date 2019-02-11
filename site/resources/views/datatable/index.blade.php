@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>SBA Profile</h1>
                </div>

                <div class="panel-body">
                    <div class="row" style="margin-bottom: 30px">
                        <h3 class="text-center">Search By Filter</h3>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="user_id" id="user_id" placeholder="User ID" data-col="user id">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="naics" id="naics" placeholder="NAICS" data-col="naics">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="keywords" id="keywords" placeholder="Keywords" data-col="keywords">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="name" id="name" placeholder="Name of Firm" data-col="name of firm">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="trade_name" id="trade_name" placeholder="Trade Name" data-col="trade name">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="duns" id="duns" placeholder="DUNS Number" data-col="duns number">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="city" id="city" placeholder="City" data-col="city">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="state" id="state" placeholder="State" data-col="state">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="zip" id="zip" placeholder="Zip" data-col="zip">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="email" id="email" placeholder="E-mail" data-col="e-mail">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="phone" id="phone" placeholder="Phone Number" data-col="phone number">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="www_page" id="www_page" placeholder="WWW Page" data-col="www page">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="economic" id="economic" placeholder="Ownership" data-col="ownership and self-certifications">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="contact" id="contact" placeholder="Contact Person" data-col="contact person">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="ms_area" id="ms_area" placeholder="Metropolitan Statistical Area" data-col="metropolitan statistical area">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="cage" id="cage" placeholder="CAGE Code" data-col="cage code">
                        </div>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="established" id="established" placeholder="Year Established" data-col="year established">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="datatable" class="table display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NAICS</th>
                                        <th>User ID</th>
                                        <th>Name of Firm</th>
                                        <th>Trade Name</th>
                                        <th>DUNS Number</th>
                                        <th>Parent DUNS Number</th>
                                        <th>Address, line 1</th>
                                        <th>Address, line 2</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Zip</th>
                                        <th>Phone Number</th>
                                        <th>Fax Number</th>
                                        <th>E-mail Address</th>
                                        <th>WWW Page</th>
                                        <th>E-Commerce Website</th>
                                        <th>Economic Group</th>
                                        <th>Contact Person</th>
                                        <th>County Code (3 digit)</th>
                                        <th>Congressional District</th>
                                        <th>Metropolitan Statistical Area</th>
                                        <th>CAGE Code</th>
                                        <th>Year Established</th>
                                        <th>Accepts Government Credit Card?</th>
                                        <th>GSA Advantage Contract(s)</th>
                                        <th>Ownership and Self-Certifications</th>
                                        <th>SBA 8(a) Case Number</th>
                                        <th>SBA 8(a) Entrance Date</th>
                                        <th>SBA 8(a) Exit Date</th>
                                        <th>HUBZone Certified?</th>
                                        <th>HUBZone Certification Date</th>
                                        <th>8(a) JV Entrance Date</th>
                                        <th>8(a) JV Exit Date</th>
                                        <th>Capaibilities Narrative</th>
                                        <th>Construnction Bonding Level(per contract)</th>
                                        <th>Construnction Bonding Level(aggregate)</th>
                                        <th>Service Bonding Level(per contract)</th>
                                        <th>Service Bonding Level(aggregate)</th>
                                        <th>Keywords</th>
                                        <th>Quality Assurance standards</th>
                                        <th>Electronic data Interchange capable?</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
$(document).ready(function() {
    

    //thats all
    $('#datatable').DataTable({
        "processing": true, //process it
        "serverSide": true, //make it server side
        "scrollX": true,
        "scrollY": true,
        "scroller": {
            "displayBuffer": 20
        },
        "ajax": location.href, //this will call the the index function in the user controller
        "columns": [ //define the keys
            { "data": "id" },
            { "data": "naics" },
            { "data": "user_id" },
            { "data": "name_of_firm" },
            { "data": "trade_name" },
            { "data": "duns_num" },
            { "data": "p_dunms_num" },
            { "data": "address1" },
            { "data": "address2" },
            { "data": "city" },
            { "data": "state" },
            { "data": "zip" },
            { "data": "phone" },
            { "data": "fax" },
            { "data": "email" },
            { "data": "www_page" },
            { "data": "ecom_website" },
            { "data": "economic" },
            { "data": "contact" },
            { "data": "county_code" },
            { "data": "cong_district" },
            { "data": "ms_area" },
            { "data": "cage_code" },
            { "data": "established_year" },
            { "data": "accept_card" },
            { "data": "gsa_contact" },
            { "data": "ownership" },
            { "data": "hubsone_certdate" },
            { "data": "sba_8a_ent" },
            { "data": "sba_8a_exit" },
            { "data": "ishubzone_cert" },
            { "data": "hubsone_certdate" },
            { "data": "jv_ent" },
            { "data": "jv_exit" },
            { "data": "capabilities" },
            { "data": "con_bonding_cont" },
            { "data": "con_bonding_agg" },
            { "data": "bonding_cont" },
            { "data": "bonding_agg" },
            { "data": "keywords" },
            { "data": "quality_assurance" },
            { "data": "electronic_data" },
        ],
    });
    
} );
</script>
@endsection
