@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>SBA Profile</h2>
                </div>

                <div class="panel-body">
                    <div class="row" style="margin-bottom: 30px">
                        <h3 class="text-center">Search By Filter</h3>
                        <div class="col-md-3 filter-item">
                            <input class="filter" name="user_id" id="user_id" placeholder="User ID" data-col="user id">
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
                                <tbody>
                                    @forelse ($lists as $list)
                                    <tr>
                                        <td>{!! $list->naics !!}</td>
                                        <td>{!! $list->user_id !!}</td>
                                        <td>{!! $list->name_of_firm !!}</td>
                                        <td>{!! $list->trade_name !!}</td>
                                        <td>{!! $list->duns_num !!}</td>
                                        <td>{!! $list->p_dunms_num !!}</td>
                                        <td>{!! $list->address1 !!}</td>
                                        <td>{!! $list->address2 !!}</td>
                                        <td>{!! $list->city !!}</td>
                                        <td>{!! $list->state !!}</td>
                                        <td>{!! $list->zip !!}</td>
                                        <td>{!! $list->phone !!}</td>
                                        <td>{!! $list->fax !!}</td>
                                        <td>{!! $list->email !!}</td>
                                        <td>{!! $list->www_page !!}</td>
                                        <td>{!! $list->ecom_website !!}</td>
                                        <td>{!! $list->economic !!}</td>
                                        <td>{!! $list->contact !!}</td>
                                        <td>{!! $list->county_code !!}</td>
                                        <td>{!! $list->cong_district !!}</td>
                                        <td>{!! $list->ms_area !!}</td>
                                        <td>{!! $list->cage_code !!}</td>
                                        <td>{!! $list->established_year !!}</td>
                                        <td>{!! $list->accept_card !!}</td>
                                        <td>{!! $list->gsa_contact !!}</td>
                                        <td>{!! $list->ownership !!}</td>
                                        <td>{!! $list->hubsone_certdate !!}</td>
                                        <td>{!! $list->sba_8a_ent !!}</td>
                                        <td>{!! $list->sba_8a_exit !!}</td>
                                        <td>{!! $list->ishubzone_cert !!}</td>
                                        <td>{!! $list->hubsone_certdate !!}</td>
                                        <td>{!! $list->jv_ent !!}</td>
                                        <td>{!! $list->jv_exit !!}</td>
                                        <td>{!! $list->capabilities !!}</td>
                                        <td>{!! $list->con_bonding_cont !!}</td>
                                        <td>{!! $list->con_bonding_agg !!}</td>
                                        <td>{!! $list->bonding_cont !!}</td>
                                        <td>{!! $list->bonding_agg !!}</td>
                                        <td>{!! $list->keywords !!}</td>
                                        <td>{!! $list->quality_assurance !!}</td>
                                        <td>{!! $list->electronic_data !!}</td>
                                    </tr>
                                    @empty
                                        <h3>No Data Exists!</h3>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
$(document).ready(function() {
    $('.filter').multifilter();

    $('#datatable').DataTable( {
        
        "scrollX": true,
        "pageLength": 50,
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
    } );
} );
</script>
@endsection
