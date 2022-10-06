@extends('layouts.default', ['body_class' => 'frontend-home-page'])
@section('content')
    <section class="hero">
        <div class="container">
            <div class="home-hero-text">
                <h1>Ik zoek een zorgverlener</h1>
            </div>
        </div>
    </section>

    <section class="zoek-view-sec">
        <div class="container"> 
            <h1 class="mb-5" style="font-size: 2.6rem; font-family: Arial, Helvetica, sans-serif; margin-bottom: 30px;">IK ZOEK EEN ZORGVERLENER</h1>
        </div>
        <div class="container">
            <div class="zoek-single-views">
            <div class="zoek-view-left">
            <div class="zoek-main-card" style="width: 100%;">
                     <a href="#">
                     <div class="zoek-media">
                     <img src="https://cdn3.vectorstock.com/i/thumb-large/66/77/avatar-young-bearded-guy-brow-haired-man-vector-32416677.jpg" alt="" class="img-fluid">
                     <div class="zoek-media-body">
                        <h5><strong>Name: </strong>Jhon Doe</h5>
                        <h6><strong>Email: </strong>admin@pgbtopper.com</h6> 
                     </div>
                     </div>
                     <div class="zoek-bottom-info">
                        <table>
                            <tr>
                                <td style="text-align: left;"><p><span>Role:</span> Geen voorkeur</p></td> 
                            </tr> 
                        </table>
                     </div>
                     </a>
                </div>
                <div class="zoek-mail-box-wrap">
                    <h4>Send Message to this Seller</h4>
                    <form action=""> 
                        <div class="form-group">
                            <label for="">Subject:</label>
                            <input name="title" type="text" placeholder="Enter your title..">
                        </div>
                        <div class="form-group">
                            <label for="">Message:</label>
                            <textarea name="message" class="form-control"></textarea>
                        </div>
                        <div class="form-btn">
                            <button type="submit" class="btn btn-submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="zoek-view-right">
                <div class="intake-table">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 class="my-5">Information</h1> 
                    </div>

                    <table class="table table-striped" style="width: 100%; margin: 0 auto;">
                        <tr>
                        <th>Name</th>
                        <th>:</th>
                        <td>->userame</td>
                        </tr>
                        <tr>
                        <th>Age</th>
                        <th>:</th>
                        <td>->age</td>
                        </tr>
                        <tr>
                        <th>Distance</th>
                        <th>:</th>
                        <td>->distance</td>
                        </tr>
                        <tr>
                        <th>Gender</th>
                        <th>:</th>
                        <td>->gender</td>
                        </tr>
                        <tr>
                        <th>Days</th>
                        <th>:</th>
                        <td>->days</td>
                        </tr>
                        <tr>
                        <th>Desired</th>
                        <th>:</th>
                        <td>->desired</td>
                        </tr>
                        <tr>
                        <th>License</th>
                        <th>:</th>
                        <td>->license</td>
                        </tr>
                        <tr>
                        <th>Candidate Status</th>
                        <th>:</th>
                        <td>->candidate_status</td>
                        </tr>
                        <tr>
                        <th>Experience</th>
                        <th>:</th>
                        <td>->experience</td>
                        </tr>
                        <tr>
                        <th>Other</th>
                        <th>:</th>
                        <td>->other</td>
                        </tr>
                        <tr>
                        <th>Services</th>
                        <th>:</th>
                        <td>->services</td>
                        </tr>
                        <tr>
                        <th>Specific Experience</th>
                        <th>:</th>
                        <td>->specific_experience</td>
                        </tr>
                    </table> 
                </div>
            </div>
            </div>
        </div>
    </section>

<section class="footer_image footer_image_2"></section>
    
@endsection
