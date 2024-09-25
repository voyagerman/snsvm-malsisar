<?php
session_start();
$csrf_token = md5(date('Y-m-d H:i:s:u') . rand(10000, 100000));
$firstRandNumber = rand();
$_SESSION['csrf_token'] = $csrf_token;
?>
<!doctype html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5HPPLCF');</script>
<!-- End Google Tag Manager -->
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="img/favicon.ico">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="fonts/icomoon/style.css" rel="stylesheet" type="text/css">
<link href="css/nav.css" rel="stylesheet" type="text/css">
<link href="css/jquery.directional-hover.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
<title>SNSVM</title>
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=RHnwTlJdC4cZsIwMyYbK_sLF9X4Jo0-Vrx_JkN40FgZhOC4sth5TVgU5SC7RosZobXiMGXDXL_1nhe4jgBPwcQ" charset="UTF-8"></script>
<link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cDovL2xvY2FsaG9zdC9zbnN2bS9pbmRleC5waHA"/>
	<style>
        input:required:invalid,
        input:focus:invalid {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAeVJREFUeNqkU01oE1EQ/mazSTdRmqSxLVSJVKU9RYoHD8WfHr16kh5EFA8eSy6hXrwUPBSKZ6E9V1CU4tGf0DZWDEQrGkhprRDbCvlpavan3ezu+LLSUnADLZnHwHvzmJlvvpkhZkY7IqFNaTuAfPhhP/8Uo87SGSaDsP27hgYM/lUpy6lHdqsAtM+BPfvqKp3ufYKwcgmWCug6oKmrrG3PoaqngWjdd/922hOBs5C/jJA6x7AiUt8VYVUAVQXXShfIqCYRMZO8/N1N+B8H1sOUwivpSUSVCJ2MAjtVwBAIdv+AQkHQqbOgc+fBvorjyQENDcch16/BtkQdAlC4E6jrYHGgGU18Io3gmhzJuwub6/fQJYNi/YBpCifhbDaAPXFvCBVxXbvfbNGFeN8DkjogWAd8DljV3KRutcEAeHMN/HXZ4p9bhncJHCyhNx52R0Kv/XNuQvYBnM+CP7xddXL5KaJw0TMAF8qjnMvegeK/SLHubhpKDKIrJDlvXoMX3y9xcSMZyBQ+tpyk5hzsa2Ns7LGdfWdbL6fZvHn92d7dgROH/730YBLtiZmEdGPkFnhX4kxmjVe2xgPfCtrRd6GHRtEh9zsL8xVe+pwSzj+OtwvletZZ/wLeKD71L+ZeHHWZ/gowABkp7AwwnEjFAAAAAElFTkSuQmCC);
            /* background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAEZSURBVChTjZG9zkFBEIbHCQqtRnEuQUElUaoULkGjkHAdOoVWLSoXIHEFrkIh0ZCQ6Dhn9pzXzuzajy++nyfZ7M7POzs7W4CFLPl8TlQsUjQcivk7IjKLBRJ7NKORmH+iIhEkUaT7k2y7RVKpgDsdZJuN9zo0iwcDpFYgK1uvNSAFxL5Lod1OfU9UlJ/P4bY0jsHdriaLj8djTXwl9JM2m6F62KtVH30niPLDwSWWSkjKZT3/ROSHSIU4JqrXiZjJ/gPJP+B4dMHveDFwvYa2dNnbxP70DV9v8iPnRgNmMnkroOd2G2Y2Q365OBFPpy5Qq2kBIT+dwP2++l+XWa2cSMbLrZYmf+R2Q7bfe8O2x70esuXSm/8BeAA0ydyJkgfl7gAAAABJRU5ErkJggg==); */
            background-position: right top;
            background-repeat: no-repeat;
            -moz-box-shadow: none;
        }

        input:required:valid {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAepJREFUeNrEk79PFEEUx9/uDDd7v/AAQQnEQokmJCRGwc7/QeM/YGVxsZJQYI/EhCChICYmUJigNBSGzobQaI5SaYRw6imne0d2D/bYmZ3dGd+YQKEHYiyc5GUyb3Y+77vfeWNpreFfhvXfAWAAJtbKi7dff1rWK9vPHx3mThP2Iaipk5EzTg8Qmru38H7izmkFHAF4WH1R52654PR0Oamzj2dKxYt/Bbg1OPZuY3d9aU82VGem/5LtnJscLxWzfzRxaWNqWJP0XUadIbSzu5DuvUJpzq7sfYBKsP1GJeLB+PWpt8cCXm4+2+zLXx4guKiLXWA2Nc5ChOuacMEPv20FkT+dIawyenVi5VcAbcigWzXLeNiDRCdwId0LFm5IUMBIBgrp8wOEsFlfeCGm23/zoBZWn9a4C314A1nCoM1OAVccuGyCkPs/P+pIdVIOkG9pIh6YlyqCrwhRKD3GygK9PUBImIQQxRi4b2O+JcCLg8+e8NZiLVEygwCrWpYF0jQJziYU/ho2TUuCPTn8hHcQNuZy1/94sAMOzQHDeqaij7Cd8Dt8CatGhX3iWxgtFW/m29pnUjR7TSQcRCIAVW1FSr6KAVYdi+5Pj8yunviYHq7f72po3Y9dbi7CxzDO1+duzCXH9cEPAQYAhJELY/AqBtwAAAAASUVORK5CYII=);
            /* background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAALCAYAAACprHcmAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAADySURBVChTY/wPBAwEwKEHyxnEeBQYGECK8YHSndb/LWcx/H/04dp/vIpTNir9d17A8P/Vl4dgPk7FSevlwArvvjsPFcGhOH+78X+PRQz/117tgopAAMPO27P/R60W/b/55mSwQMfh8P8By1n/F283B/ORAeOfv3/+p21SYnj3/RkDKzMnELMwfPn1kWFx0CsGPnZhaHhAABMzEzPDNN8bDEyMTAzcbPwgIQZ7+SgMhWAAteH/lReH/nsvYfjvvZTh/99//6CiqIAJqodBW9yWQV3EjMFcyhtoCyNUFBWgxOC7b08Zvv/5yiDNpwYVQQYMDADakwqfRAb6ygAAAABJRU5ErkJggg==); */
            background-position: right top;
            background-repeat: no-repeat;
        }
    </style>
	
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
<?php
include_once "header.php";
?>
<div class="online-applications-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-1 col-sm-12 offset-0 col-12 offset-0">
        <h3>Online Application 2024-25</h3>
      </div>
      <div class="col-md-10 offset-1 col-sm-12 offset-0 col-12 offset-0">
      	<form>
                    <input type="hidden" name="_token" id="_token" value="<?= $csrf_token ?>">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>*Student's First Name</label>
                                <input type="text" class="form-control" id="sfname" name="sfname" pattern="[A-Za-z]{1,25}" maxlength="25" required title="Invalid data in this field.">
                                <p class="text-danger" id="sfname_error"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Student's Middle Name</label>
                                <input type="text" class="form-control" id="smname" name="smname" pattern="[A-Za-z]{1,25}" maxlength="25">
                                <p class="text-danger" id="smname_error"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Student's Last Name</label>
                                <input type="text" class="form-control" id="slname" name="slname" pattern="[A-Za-z]{1,25}" maxlength="25" >
                                <p class="text-danger" id="slname_error"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>*Date of Birth</label>
                                <div class="datepicker date input-group">
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control" id="dob" name="dob" required>
                                    <div class="input-group-append"> <span class="input-group-text"><i class="fa fa-calendar"></i></span> </div>
                                </div>
                                <p class="text-danger" id="dob_error"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>*Gender</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <p class="text-danger" id="gender_error"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>*Category</label>
                                <select class="custom-select" id="category" name="category">
                                    <option value="GEN">Gen</option>
                                    <option value="SC">SC</option>
                                    <option value="ST">ST</option>
                                    <option value="OBC">OBC</option>
                                </select>
                                <p class="text-danger" id="category_error"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>*Admission Sought For</label>
                                <select class="custom-select" id="sought" name="sought">
                                    <option value="">Please select the class</option>
                                    <option value="NUR">NUR</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="Class I">Class I</option>
                                    <option value="Class II">Class II</option>
                                    <option value="Class III">Class III</option>
                                    <option value="Class IV">Class IV</option>
                                    <option value="Class V">Class V</option>
                                    <option value="Class VI">Class VI</option>
                                     <option value="Class VII">Class VII</option>
                                    <!-- <option value="Class VII">Class VII</option>
                                    <option value="Class VIII">Class VIII</option>
                                    <option value="Class IX">Class IX</option>
                                    <option value="Class X">Class X</option>
                                    <option value="Class XI">Class XI</option>
                                    <option value="Class XII">Class XII</option> -->
                                </select>
                                <p class="text-danger" id="sought_error"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Current School/Pre School</label>
                                <input type="text" class="form-control" id="cschool" name="cschool" pattern="[A-Za-z0-9 ]+$" maxlength="200">
                                <p class="text-danger" id="cschool_error"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Current Class</label>
                                <!-- <input type="text" class="form-control" id="cclass" name="cclass"> -->
                                <select class="custom-select" id="cclass" name="cclass">
                                    <option value="">Please select the class</option>
									<option value="NA">NA</option>
									<option value="PRENUR">PRE NUR</option>
                                    <option value="NUR">NUR</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="Class I">Class I</option>
                                    <option value="Class II">Class II</option>
                                    <option value="Class III">Class III</option>
                                    <option value="Class IV">Class IV</option>
                                    <option value="Class V">Class V</option>
                                    <option value="Class VI">Class VI</option>
                                    <option value="Class VII">Class VII</option>
                                     <!--<option value="Class VII">Class VII</option>
                                    <option value="Class VIII">Class VIII</option>
                                    <option value="Class IX">Class IX</option>
                                    <option value="Class X">Class X</option>
                                    <option value="Class XI">Class XI</option>
                                    <option value="Class XII">Class XII</option> -->
                                </select>
                                <p class="text-danger" id="cclass_error"></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Current School Address</label>
                                <textarea rows="3" class="form-control" id="caddress" name="caddress" pattern="[A-Za-z0-9/.,- ]+$" maxlength="200"></textarea>
                                <p class="text-danger" id="caddress_error"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>*Mother Tongue</label>
                                <!-- <input type="text" class="form-control" id="smtongue" name="smtongue"> -->
                                <select class="custom-select" id="smtongue" name="smtongue">
                                    <option value="">Please select language</option>
                                    <option value="Hindi">Hindi</option>
                                    <option value="Rajasthani">Rajasthani</option>
                                    <option value="Other">Other</option>
                                </select>
                                <p class="text-danger" id="smtongue_error"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student's Aadhar number</label>
                                <input type="text" class="form-control" id="sanumber" name="sanumber" pattern="[0-9]{12}" maxlength="12">
                                <p class="text-danger" id="sanumber_error"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Blood Group</label>
                                <select class="custom-select" id="bgroup" name="bgroup">
                                    <option value="">Select One</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                                <p class="text-danger" id="bgroup_error"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>*Children with special ability</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="dachild" id="dachild" value="yes">
                                    <label class="form-check-label" for="inlineRadio10">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="dachild" id="dachild" value="no">
                                    <label class="form-check-label" for="inlineRadio11">No</label>
                                </div>
                                <p class="text-danger" id="dachild_error"></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>*Any known allergy or medical history</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="amhistory" id="amhistory" value="yes">
                                    <label class="form-check-label" for="inlineRadio14">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="amhistory" id="amhistory" value="no">
                                    <label class="form-check-label" for="inlineRadio15">No</label>
                                </div>
                                <p class="text-danger" id="amhistory_error"></p>
                            </div>
                        </div>
                        <div class="col-md-12 ph_Div">
                            <div class="alert alert-secondary" role="alert">
                                <div class="form-group">
                                    <label>Please specify the special ability( if any )</label>
                                    <textarea rows="3" class="form-control" id="phandicap" name="phandicap"></textarea>
                                    <p class="text-danger" id="phandicap_error"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 medicalhistory_Div">
                            <div class="alert alert-secondary" role="alert">
                                <div class="form-group">
                                    <label>Please Specify in details ( if any )</label>
                                    <textarea rows="3" class="form-control" id="mhistory" name="mhistory"></textarea>
                                    <p class="text-danger" id="mhistory_error"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="alert alert-secondary" role="alert">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6>Contact details (For all future communication)</h6>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>*Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                            <p class="text-danger" id="email_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>*Phone No</label>
                                            <input type="text" class="form-control" id="phoneno" name="phoneno" pattern="[6789][0-9]{9}" maxlength="10" required>
                                            <p class="text-danger" id="phoneno_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>*Whatsapp No</label>
                                            <input type="text" class="form-control" id="whatsappno" name="whatsappno" pattern="[6789][0-9]{9}" maxlength="10" required>
                                            <p class="text-danger" id="whatsappno_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>*Address</label>
                                            <textarea rows="3" class="form-control" id="address" name="address" pattern="[A-Za-z0-9/.,- ]+$" maxlength="200" required></textarea>
                                            <p class="text-danger" id="address_error"></p>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*City/Village</label>
                                            <input type="text" class="form-control" id="villageCity" name="villageCity" pattern="[A-Za-z ]+$" maxlength="80" required>
                                            <p class="text-danger" id="villageCity_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*Pincode</label>
                                            <input type="text" class="form-control" id="pincode" name="pincode" pattern="[0-9]{6}" maxlength="6" required>
                                            <p class="text-danger" id="pincode_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*State</label>
                                            <select class="custom-select" id="state" name="state">
                                                <option value="">Select State</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Orissa">Orissa</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttaranchal">Uttaranchal</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                            <!-- <input type="text" class="form-control" id="state" name="state" pattern="[A-Za-z ]+$" maxlength="80" required> -->
                                            <p class="text-danger" id="state_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*Country</label>
                                            <!-- <select class="custom-select" id="country" name="country">
                                                <option value="">Select Country</option>
                                                <option value="India">India</option>
                                            </select> -->
                                            <input type="text" class="form-control" id="country" name="country" value="India" disabled>
                                            <p class="text-danger" id="country_error"></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="alert alert-secondary" role="alert">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6>Contact details (In Case of Emergency)</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>*First Person's Name</label>
                                            <input type="text" class="form-control" id="ecperson1" name="ecperson1" pattern="[A-Za-z\. ]+$" maxlength="40" required>
                                            <p class="text-danger" id="ecperson1_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>*Relation to the Student</label>
                                            <input type="text" class="form-control" id="ecrelation1" name="ecrelation1" pattern="[A-Za-z ]+$" maxlength="100" required>
                                            <p class="text-danger" id="ecrelation1_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>*Mobile</label>
                                            <input type="text" class="form-control" id="cpmobile1" name="cpmobile1" pattern="[6789][0-9]{9}" maxlength="10" required>
                                            <p class="text-danger" id="cpmobile1_error"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>*Second Person's Name</label>
                                            <input type="text" class="form-control" id="ecperson2" name="ecperson2" pattern="[A-Za-z\. ]+$" maxlength="40" required>
                                            <p class="text-danger" id="ecperson2_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>*Relation to the Student</label>
                                            <input type="text" class="form-control" id="ecrelation2" name="ecrelation2" pattern="[A-Za-z ]+$" maxlength="100" required>
                                            <p class="text-danger" id="ecrelation2_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>*Mobile</label>
                                            <input type="text" class="form-control" id="cpmobile2" name="cpmobile2" pattern="[6789][0-9]{9}" maxlength="10" required>
                                            <p class="text-danger" id="cpmobile2_error"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>*Preferred mode of transport</label>
                                <select class="custom-select" id="transport_mode" name="transport_mode">
                                    <option value="">Please select </option>
                                    <option value="School Bus">School Bus</option>
                                    <!-- <option value="Car Pool">Car Pool</option> -->
                                    <option value="Private">Private</option>
                                </select>
                                <p class="text-danger" id="transport_mode_error"></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label style="font-size:16px; font-weight:bold;">*Please fill out the guardian details</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="goption" id="goption" value="parents">
                                    <label class="form-check-label" for="inlineRadio3">Parents</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="goption" id="goption" value="legal guardian">
                                    <label class="form-check-label" for="inlineRadio4">Legal Guardian</label>
                                </div>
                                <p class="text-danger" id="goption_error"></p>
                            </div>
                        </div>
                        <div class="col-md-12 parentsDiv">
                            <div class="alert alert-secondary" role="alert">
                                <h5>Father's Details</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>*First Name</label>
                                            <input type="text" class="form-control" id="ffname" name="ffname" pattern="[A-Za-z]{1,25}" maxlength="25">
                                            <p class="text-danger" id="ffname_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" id="fmname" name="fmname" pattern="[A-Za-z]{1,25}" maxlength="25">
                                            <p class="text-danger" id="fmname_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" id="flname" name="flname" pattern="[A-Za-z]{1,25}" maxlength="25">
                                            <p class="text-danger" id="flname_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Highest Qualification</label>
                                            <select class="custom-select" id="fqualification" name="fqualification">
                                                <option value="">Please select </option>
                                                <option value="Undergraduate & Below">Undergraduate & Below</option>
                                                <option value="Graduate">Graduate</option>
                                                <option value="Postgraduate">Postgraduate</option>
                                            </select>
                                            <p class="text-danger" id="fqualification_error"></p>
                                        </div>
                                    </div>
                                    <!--<div class="col-md-4">
                                        <div class="form-group">
                                            <label>Occupation</label>
                                            <input type="text" class="form-control" id="foccupation" name="foccupation">
                                            <p class="text-danger" id="foccupation_error"></p>
                                        </div>
                                    </div>-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Occupation</label>
                                            <select class="custom-select" id="foccupation" name="foccupation">
                                                <option value="">Please select </option>
                                                <option value="Service">Service</option>
                                                <option value="Business">Business</option>
                                                <option value="Professional">Professional</option>
                                                <option value="Self Employed">Self Employed</option>
                                                <option value="NA">Not Applicable</option>
                                            </select>
                                            <p class="text-danger" id="foccupation_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Organisation Name</label>
                                            <input type="text" class="form-control" id="forganisationname" name="forganisationname" pattern="[A-Za-z ]+$" maxlength="80">
                                            <p class="text-danger" id="forganisationname_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" id="fdesignation" name="fdesignation" pattern="[A-Za-z ]+$" maxlength="80">
                                            <p class="text-danger" id="fdesignation_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Annual Income</label>
                                            <input type="text" class="form-control" id="fincome" name="fincome" pattern="[A-Za-z0-9]{10}" maxlength="10">
                                            <p class="text-danger" id="fincome_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*Email</label>
                                            <input type="email" class="form-control" id="femail" name="femail">
                                            <p class="text-danger" id="femail_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*Mobile No</label>
                                            <input type="text" class="form-control" id="fmobile" name="fmobile" pattern="[6789][0-9]{9}" maxlength="10">
                                            <p class="text-danger" id="fmobile_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*Aadhar number</label>
                                            <input type="text" class="form-control" id="fanumber" name="fanumber" pattern="[0-9]{12}" maxlength="12">
                                            <p class="text-danger" id="fanumber_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>PAN Number</label>
                                            <input type="text" class="form-control" id="fpnumber" name="fpnumber" pattern="[a-zA-Z0-9]{10}" maxlength="10">
                                            <p class="text-danger" id="fpnumber_error"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 parentsDiv">
                            <div class="alert alert-secondary" role="alert">
                                <h5>Mother's Details</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>*First Name</label>
                                            <input type="text" class="form-control" id="mfname" name="mfname" pattern="[A-Za-z]{1,25}" maxlength="25">
                                            <p class="text-danger" id="mfname_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" id="mmname" name="mmname" pattern="[A-Za-z]{1,25}" maxlength="25">
                                            <p class="text-danger" id="mmname_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" id="mlname" name="mlname" pattern="[A-Za-z]{1,25}" maxlength="25">
                                            <p class="text-danger" id="mlname_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Highest Qualification</label>
                                            <select class="custom-select" id="mqualification" name="mqualification">
                                                <option value="">Please select </option>
                                                <option value="Undergraduate & Below">Undergraduate & Below</option>
                                                <option value="Graduate">Graduate</option>
                                                <option value="Postgraduate">Postgraduate</option>
                                            </select>
                                            <p class="text-danger" id="mqualification_error"></p>
                                        </div>
                                    </div>
                                    <!--<div class="col-md-4">
                                        <div class="form-group">
                                            <label>Occupation</label>
                                            <input type="text" class="form-control" id="moccupation" name="moccupation">
                                            <p class="text-danger" id="moccupation_error"></p>
                                        </div>
                                    </div>-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Occupation</label>
                                            <select class="custom-select" id="moccupation" name="moccupation">
                                                <option value="">Please select </option>
                                                <option value="Service">Service</option>
                                                <option value="Business">Business</option>
                                                <option value="Professional">Professional</option>
                                                <option value="Self Employed">Self Employed</option>
                                                <option value="House Wife">House Wife</option>
                                                <option value="NA">Not Applicable</option>
                                            </select>
                                            <p class="text-danger" id="moccupation_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Organisation Name</label>
                                            <input type="text" class="form-control" id="morganisationname" name="morganisationname" pattern="[A-Za-z ]+$" maxlength="80">
                                            <p class="text-danger" id="morganisationname_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" id="mdesignation" name="mdesignation" pattern="[A-Za-z ]+$" maxlength="80">
                                            <p class="text-danger" id="mdesignation_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Annual Income</label>
                                            <input type="text" class="form-control" id="mincome" name="mincome" pattern="[A-Za-z0-9/. ]+$" maxlength="10">
                                            <p class="text-danger" id="mincome_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="memail" name="memail">
                                            <p class="text-danger" id="memail_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile No</label>
                                            <input type="text" class="form-control" id="mmobile" name="mmobile" pattern="[6789][0-9]{9}" maxlength="10">
                                            <p class="text-danger" id="mmobile_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*Aadhar number</label>
                                            <input type="text" class="form-control" id="manumber" name="manumber" pattern="[0-9]{12}" maxlength="12">
                                            <p class="text-danger" id="manumber_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>PAN Number</label>
                                            <input type="text" class="form-control" id="mpnumber" name="mpnumber" pattern="[A-Za-z0-9]{10}" maxlength="10">
                                            <p class="text-danger" id="mpnumber_error"></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 guardianDiv">
                            <div class="alert alert-secondary" role="alert">
                                <h5>Guardian Details</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>*First Name</label>
                                            <input type="text" class="form-control" id="gfname" name="gfname" pattern="[A-Za-z]{1,25}" maxlength="25">
                                            <p class="text-danger" id="gfname_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" id="gmname" name="gmname" pattern="[A-Za-z]{1,25}" maxlength="25">
                                            <p class="text-danger" id="gmname_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" id="glname" name="glname" pattern="[A-Za-z]{1,25}" maxlength="25">
                                            <p class="text-danger" id="glname_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*Relation to the Student</label>
                                            <input type="text" class="form-control" id="grelation" name="grelation" pattern="[A-Za-z ]+$" maxlength="100">
                                            <p class="text-danger" id="grelation_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Highest Qualification</label>
                                            <select class="custom-select" id="gqualification" name="gqualification">
                                                <option value="">Please select </option>
                                                <option value="Undergraduate & Below">Undergraduate & Below</option>
                                                <option value="Graduate">Graduate</option>
                                                <option value="Postgraduate">Postgraduate</option>
                                            </select>
                                            <p class="text-danger" id="gqualification_error"></p>
                                        </div>
                                    </div>
                                    <!--<div class="col-md-4">
                                        <div class="form-group">
                                            <label>Occupation</label>
                                            <input type="text" class="form-control" id="goccupation" name="goccupation">
                                            <p class="text-danger" id="goccupation_error"></p>
                                        </div>
                                    </div>-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Occupation</label>
                                            <select class="custom-select" id="goccupation" name="goccupation">
                                                <option value="">Please select </option>
                                                <option value="Service">Service</option>
                                                <option value="Business">Business</option>
                                                <option value="Professional">Professional</option>
                                                <option value="Self Employed">Self Employed</option>
                                                <option value="House Wife">House Wife</option>
                                                <option value="NA">Not Applicable</option>
                                            </select>
                                            <p class="text-danger" id="goccupation_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Organisation Name</label>
                                            <input type="text" class="form-control" id="gorganisationname" name="gorganisationname" pattern="[A-Za-z ]+$" maxlength="80">
                                            <p class="text-danger" id="gorganisationname_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" id="gdesignation" name="gdesignation" pattern="[A-Za-z ]+$" maxlength="80">
                                            <p class="text-danger" id="gdesignation_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Annual Income</label>
                                            <input type="text" class="form-control" id="gincome" name="gincome" pattern="[A-Za-z0-9/. ]+$" maxlength="10">
                                            <p class="text-danger" id="gincome_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="gemail" name="gemail">
                                            <p class="text-danger" id="gemail_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Mobile No</label>
                                            <input type="text" class="form-control" id="gmobile" name="gmobile" pattern="[6789][0-9]{9}" maxlength="10">
                                            <p class="text-danger" id="gmobile_error"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 siblingDiv">
                            <p style="font-size:16px; font-weight:bold;">*Please fill out the sibling details</p>

                            <div class="form-group">
                                <!-- <label>Sibling in SNSVM</label> -->
                                <label>Have Siblings ?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="siblingoption" id="siblingoption" value="yes">
                                    <label class="form-check-label" for="inlineRadio5">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="siblingoption" id="siblingoption" value="no">
                                    <label class="form-check-label" for="inlineRadio6">No</label>
                                </div>
                                <!-- <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="siblingoption" id="siblingoption" value="na">
                                    <label class="form-check-label" for="inlineRadio6">NA</label>
                                </div> -->
                                <p class="text-danger" id="siblingoption_error"></p>
                            </div>
                            <!-- <div class="siblingSNSVM_Div">
                                <div class="alert alert-secondary" role="alert">
                                    <p>Details of siblings (if any) studying at The SNSVM Malsisar</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="background-color:#f5f5f5;">
                                            <thead>
                                                <tr>
                                                    <th>Name of Sibling</th>
                                                    <th>Class </th>
                                                    <th>Section</th>
                                                    <th>Enrolment Number</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" class="form-control" name="sibling_snsvm_name1"></td>
                                                    <td>
                                                        <select class="custom-select" id="sibling_snsvm_class1" name="sibling_snsvm_class1">
                                                            <option value="">Please Choose</option>
                                                            <option value="NUR">NUR</option>
                                                            <option value="LKG">LKG</option>
                                                            <option value="UKG">UKG</option>
                                                            <option value="Class I">Class I</option>
                                                            <option value="Class II">Class II</option>
                                                            <option value="Class III">Class III</option>
                                                            <option value="Class IV">Class IV</option>
                                                            <option value="Class V">Class V</option>
                                                            <option value="Class VI">Class VI</option>
                                                            <option value="Class VII">Class VII</option>
                                                            <option value="Class VIII">Class VIII</option>
                                                            <option value="Class IX">Class IX</option>
                                                            <option value="Class X">Class X</option>
                                                            <option value="Class XI">Class XI</option>
                                                            <option value="Class XII">Class XII</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="custom-select" id="sibling_snsvm_section1" name="sibling_snsvm_section1">
                                                            <option value="">Please Choose</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control" name="sibling_snsvm_enrolment1"></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" name="sibling_snsvm_name2"></td>
                                                    <td>
                                                        <select class="custom-select" id="sibling_snsvm_class2" name="sibling_snsvm_class2">
                                                            <option value="">Please Choose</option>
                                                            <option value="NUR">NUR</option>
                                                            <option value="LKG">LKG</option>
                                                            <option value="UKG">UKG</option>
                                                            <option value="Class I">Class I</option>
                                                            <option value="Class II">Class II</option>
                                                            <option value="Class III">Class III</option>
                                                            <option value="Class IV">Class IV</option>
                                                            <option value="Class V">Class V</option>
                                                            <option value="Class VI">Class VI</option>
                                                            <option value="Class VII">Class VII</option>
                                                            <option value="Class VIII">Class VIII</option>
                                                            <option value="Class IX">Class IX</option>
                                                            <option value="Class X">Class X</option>
                                                            <option value="Class XI">Class XI</option>
                                                            <option value="Class XII">Class XII</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="custom-select" id="sibling_snsvm_section2" name="sibling_snsvm_section2">
                                                            <option value="">Please Choose</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control" name="sibling_snsvm_enrolment2"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> -->
                            <div class="siblingOTHER_Div">
                                <div class="alert alert-secondary" role="alert">
                                    <p>Details of siblings (if any) studying in other schools/colleges</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="background-color:#f5f5f5;">
                                            <thead>
                                                <tr>
                                                    <th>Name of Sibling</th>
                                                    <th>School/College Name </th>
                                                    <th>Class/Course</th>
                                                    <th>Age</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" class="form-control" name="sibling_non_snsvm_name1" id="sibling_non_snsvm_name1" pattern="[A-Za-z ]+$" maxlength="100"></td>
                                                    <td><input type="text" class="form-control" name="sibling_non_snsvm_school1" id="sibling_non_snsvm_school1" pattern="[A-Za-z ]+$" maxlength="100"></td>
                                                    <td><input type="text" class="form-control" name="sibling_non_snsvm_class1" id="sibling_non_snsvm_class1" maxlength="20"></td>
                                                    <td><input type="text" class="form-control" name="sibling_non_snsvm_age1" id="sibling_non_snsvm_age1" maxlength="20"></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" name="sibling_non_snsvm_name2" id="sibling_non_snsvm_name2" pattern="[A-Za-z ]+$" maxlength="100"></td>
                                                    <td><input type="text" class="form-control" name="sibling_non_snsvm_school2" id="sibling_non_snsvm_school2" pattern="[A-Za-z ]+$" maxlength="100"></td>
                                                    <td><input type="text" class="form-control" name="sibling_non_snsvm_class2" id="sibling_non_snsvm_class2" maxlength="20"></td>
                                                    <td><input type="text" class="form-control" name="sibling_non_snsvm_age2" id="sibling_non_snsvm_age2" maxlength="20"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
						 <!-- file upload -->
                        <div class="alert alert-secondary col-md-12" role="alert">
                            <p>Upload Student photo (size of the photo should fall between 20kb to 250kb)</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                            <span class="btn btn-primary">
                                                Browse&hellip; <input type="file" name="files" id="files" filepath="" style="display: none;">
                                            </span>
                                        </label>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" name="uploadBtn1" id="uploadBtn1" class="btn btn-primary box photo">
                                        <span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Upload
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <div id="image-holder" style="border:2px solid #000; float:right;">

                                    </div>
                                    <p id="fileInfo"></p>
                                    <p id="error"></p>
                                </div>
                            </div>
                        </div>
                        <!-- uploading end -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label></label>
                                <img src="./contact-us-captcha.php?rand=<?= $firstRandNumber ?>" id='captchaimg'>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <!--<label></label>-->
                                <input id="captcha_code" name="captcha_code" type="text" class="form-control">
                                <p class="text-danger" id="captchacode_error"></p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group"> Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh. </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-check" style="margin-bottom:15px;">
                                <input class="form-check-input" type="checkbox" name="iAgree" id="iAgree" onchange="document.getElementById('submit_btn').disabled = !this.checked;">
                                <label class=" form-check-label"> I/We do hereby state that all the above mentioned details provided by me/us are true in all respects. In case of any discrepancy, the School Authorities reserve the right to cancel the Registration Form as well as the Admission of the child. The School Management entirely reserves the right to allot the date of evaluation/ assessment/ interaction as per its convenience. </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-warning pull-right" name="submit_btn" id="submit_btn" onClick="submit_application(this)">Submit</button>
                        </div>
                    </div>
                </form>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content" style="border-radius:0px;">
      <div class="modal-header">
      <h3 style="font-size:22px; text-transform:uppercase;">General Instructions:</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
     <div class="row">
      <div class="col-md-12">
      <h4 style="font-size:18px; font-weight:800;">For Grades Nursery to VII</h4>
      <p>Thank you for your interest in Sant Nandlal Smriti Vidya Mandir. Please read the following Rules & Regulations carefully before filling up the Registration Form:</p>
      <ol>
      <li>Before filling up the Registration Form, please go through the Admission Overview thoroughly as it
contains details regarding the important dates and other details of the admission process.</li>
<!--<li>Registration for admission can be done online through the school website and also the pdf of the admission form can be downloaded for offline admission.</li>
-->
<li>
Registration can be done online post payment of INR 500/- (using payment gateway) or in school office (between 9 a.m. to 4 p.m.) after the payment.</li>
<li>The Registration Form should be complete in all respects and the information provided should be
true. In case of a discrepancy, the School Authorities reserve the right to cancel the Registration
Form and the admission of the child.</li>
<li>It is advised that the parents fill up the Registration Form themselves.</li>
<li>The percentage of Marks obtained in all the subjects should be clearly mentioned while filling up the
Registration Form. This is however not applicable for admission to Nursery, LKG, UKG and Class I.</li>
<li>Registration does not imply admission. It is subject to an assessment of the student followed by interaction with the student and parents.</li>
<li>Dates for assessment and interaction will be intimated by text message on your registered mobile
number and email on your registered email id respectively after completing the online registration.<br>
However, this may be subject to change with prior notice by the Management without citing any
reason. Please check your junk/spam mail folder also, in case you are not able to trace the email.</li>
<!--<li>At the time of online registration, a fee of Rs. 500 must be paid through the online payment options
available.</li>-->
<li>Please write 'NA' in case a field is not applicable to you.</li>
      </ol>
      
      </div>
      </div>
      </div>
      
    </div>
  </div>
</div>


<?php
include_once "footer.php";
?>
<script type="text/javascript" src="js/jquery.min.js"></script> 
<!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> 
<script src="https://use.fontawesome.com/f953bc8eb8.js"></script> 
<script src="js/navbar.js"></script> 
<script src="js/sticky.js"></script> 
<script src="js/nav.js"></script> 
<script src="js/jquery.directional-hover.min.js" type="text/javascript"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
<script>
    function refreshCaptcha() {
        var img = document.images['captchaimg'];
        img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
    }
</script> 
<script>
   $(document).ready(function() {
	   $('#uploadBtn1').attr('disabled', true);
	    $('#myModal').modal('show');
        $('.parentsDiv').hide();
        $('.guardianDiv').hide();
        //$('.siblingSNSVM_Div').hide();
        $('.siblingOTHER_Div').hide();
        $('.ph_Div').hide();
        $('.medicalhistory_Div').hide();
		$('#submit_btn').attr('disabled', true); //disable submit_btn

        $('input:radio[name="goption"]').change(function(e) {
            if (this.checked && this.value == 'parents') {
                $('.parentsDiv').slideDown();
                $('.guardianDiv').slideUp();
            } else {
                $('.guardianDiv').slideDown();
                $('.parentsDiv').slideUp();
            }
        });

        $('input:radio[name="siblingoption"]').change(function(e) {
            if (this.checked && this.value == 'yes') {
                //$('.siblingSNSVM_Div').slideDown();
                $('.siblingOTHER_Div').slideDown();
            } else {
                $('.siblingOTHER_Div').slideUp();
                //$('.siblingSNSVM_Div').slideUp();
            }
        });

        $('input:radio[name="dachild"]').change(function(e) {
            if (this.checked && this.value == 'yes') {
                $('.ph_Div').slideDown();
            } else {
                $('.ph_Div').slideUp();
            }
        });

        $('input:radio[name="amhistory"]').change(function(e) {
            if (this.checked && this.value == 'yes') {
                $('.medicalhistory_Div').slideDown();
            } else {
                $('.medicalhistory_Div').slideUp();
            }
        });

        $('select[name="foccupation"]').change(function(e) {
            if (this.value == 'NA') {
                $("#forganisationname").prop('disabled', true);
                $("#fdesignation").prop('disabled', true);
            } else {
                $("#forganisationname").prop('disabled', false);
                $("#fdesignation").prop('disabled', false);
            }
        });

        $('select[name="moccupation"]').change(function(e) {
            if (this.value == 'NA') {
                $("#morganisationname").prop('disabled', true);
                $("#mdesignation").prop('disabled', true);
            } else {
                $("#morganisationname").prop('disabled', false);
                $("#mdesignation").prop('disabled', false);
            }
        });

        $('select[name="goccupation"]').change(function(e) {
            if (this.value == 'NA') {
                $("#gorganisationname").prop('disabled', true);
                $("#gdesignation").prop('disabled', true);
            } else {
                $("#gorganisationname").prop('disabled', false);
                $("#gdesignation").prop('disabled', false);
            }
        });
    });
</script> 
<script>
$(function () {
  $('.datepicker').datepicker({
    language: "es",
    autoclose: true,
    format: "dd/mm/yyyy"
  });
});

</script> 
<script>
    function submit_application(item) {

        var sfname = $('#sfname').val();
        var smname = $('#smname').val();
        var slname = $('#slname').val();

        var sought = $('#sought').val();
        var cschool = $('#cschool').val();
        var cclass = $('#cclass').val();
        var caddress = $('#caddress').val();

        var smtongue = $('#smtongue').val();
        var sanumber = $('#sanumber').val();

        var dob = $('#dob').val();
        var gender = $("input:radio[name=gender]:checked").val();
        var category = $('#category').val();
        var bgroup = $('#bgroup').val();
        var dachild = $("input:radio[name=dachild]:checked").val();
        var phandicap = $('#phandicap').val();

        var amhistory = $("input:radio[name=amhistory]:checked").val();
        var mhistory = $('#mhistory').val();

        var email = $('#email').val();
        var phoneno = $('#phoneno').val();
        var whatsappno = $('#whatsappno').val();
        var address = $('#address').val();
        var villageCity = $('#villageCity').val();
        var pincode = $('#pincode').val();
        var state = $('#state').val();
        var country = $('#country').val();

        var ecperson1 = $('#ecperson1').val();
        var ecrelation1 = $('#ecrelation1').val();
        var cpmobile1 = $('#cpmobile1').val();
        var ecperson2 = $('#ecperson2').val();
        var ecrelation2 = $('#ecrelation2').val();
        var cpmobile2 = $('#cpmobile2').val();

        var transport_mode = $('#transport_mode').val();

        var goption = $("input:radio[name=goption]:checked").val();

        var ffname = $('#ffname').val();
        var fmname = $('#fmname').val();
        var flname = $('#flname').val();
        var fqualification = $('#fqualification').val();
        var foccupation = $('#foccupation').val();
        var fworkdetails = $('#fworkdetails').val();
        var forganisationname = $('#forganisationname').val();
        var fdesignation = $('#fdesignation').val();
        var fincome = $('#fincome').val();
        var femail = $('#femail').val();
        var fmobile = $('#fmobile').val();
        var fanumber = $('#fanumber').val();
        var fpnumber = $('#fpnumber').val();

        var mfname = $('#mfname').val();
        var mmname = $('#mmname').val();
        var mlname = $('#mlname').val();
        var mqualification = $('#mqualification').val();
        var moccupation = $('#moccupation').val();
        var mworkdetails = $('#mworkdetails').val();
        var morganisationname = $('#morganisationname').val();
        var mdesignation = $('#mdesignation').val();
        var mincome = $('#mincome').val();
        var memail = $('#memail').val();
        var mmobile = $('#mmobile').val();
        var manumber = $('#manumber').val();
        var mpnumber = $('#mpnumber').val();

        var gfname = $('#gfname').val();
        var gmname = $('#gmname').val();
        var glname = $('#glname').val();
        var grelation = $('#grelation').val();
        var gqualification = $('#gqualification').val();
        var goccupation = $('#goccupation').val();
        var gworkdetails = $('#gworkdetails').val();
        var gorganisationname = $('#gorganisationname').val();
        var gdesignation = $('#gdesignation').val();
        var gincome = $('#gincome').val();
        var gemail = $('#gemail').val();
        var gmobile = $('#gmobile').val();

        var siblingoption = $("input:radio[name=siblingoption]:checked").val();

        var sibling_other_name1 = $('#sibling_non_snsvm_name1').val();
        var sibling_other_school1 = $('#sibling_non_snsvm_school1').val();
        var sibling_other_class1 = $('#sibling_non_snsvm_class1').val();
        var sibling_other_age1 = $('#sibling_non_snsvm_age1').val();

        var sibling_other_name2 = $('#sibling_non_snsvm_name2').val();
        var sibling_other_school2 = $('#sibling_non_snsvm_school2').val();
        var sibling_other_class2 = $('#sibling_non_snsvm_class2').val();
        var sibling_other_age2 = $('#sibling_non_snsvm_age2').val();

        var captcha = $('#captcha_code').val();

        var part_name_reg = /[A-Za-z]+$/;
        var full_name_reg = /[A-Za-z\. ]+$/;
        var city_name_reg = /[A-Za-z ]+$/;
        //var address_reg = /[A-Za-z0-9\.,- ]+$/;
        var address_reg = /[A-Za-z0-9,-. ]+$/;
        var pincode_reg = /[0-9]{6}/;
        var mobile_reg = /[6789][0-9]{9}/;
        var email_reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var aadhar_reg = /[0-9]{12}/;
        var pan_reg = /[A-Za-z0-9]{10}/;

        if (gender == null) {
            gender = "";
        }

        if (dachild == null) {
            dachild = "";
        }

        if (amhistory == null) {
            amhistory = "";
        }

        if (goption == null) {
            goption = "";
        }

        if (siblingoption == null) {
            siblingoption = "";
        }


        if (sfname == '' || !part_name_reg.test(sfname)) {
            $('#sfname_error').html("Enter student first Name!");
         Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter student first Name!</span>');
            return false;
        } else {
            $('#sfname_error').html("");

        }

		/*
        if (slname == '' || !part_name_reg.test(slname)) {
            $('#slname_error').html("Enter student last Name!");
         Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter student last Name!</span>');
            return false;
        } else {
            $('#slname_error').html("");

        }
		*/

        if (dob == '') {
            $('#dob_error').html("Provide DOB!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Provide DOB!</span>');
            return false;
        } else {
            $('#dob_error').html("");
        }

        if (gender == '') {
            $('#gender_error').html("Specify gender!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Specify gender!</span>');
            return false;
        } else {
            $('#gender_error').html("");
        }

        if (category == '') {
            $('#category_error').html("Choose Category!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Choose Category!</span>');
            return false;
        } else {
            $('#category_error').html("");
        }

        if (sought == '') {
            $('#sought_error').html("Choose admission sought for!");
      Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Choose admission sought for!</span>');
            return false;
        } else {
            $('#sought_error').html("");
        }

        // if (cschool == '') {
        //     $('#cschool_error').html("Choose current school!");
        //     return false;
        // } else {
        //     $('#cschool_error').html("");
        // }

        // if (cclass == '') {
        //     $('#cclass_error').html("Choose current class!");
        //     return false;
        // } else {
        //     $('#cclass_error').html("");
        // }

        // if (caddress == '') {
        //     $('#caddress_error').html("Provide current school address!");
        //     return false;
        // } else {
        //     $('#caddress_error').html("");
        // }


        if (smtongue == '') {
            $('#smtongue_error').html("Choose Mother tongue!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Choose Mother tongue!</span>');
            return false;
        } else {
            $('#smtongue_error').html("");
        }

		/*
        if (bgroup == '') {
            $('#bgroup_error').html("Choose Blood group!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Choose Blood group!</span>');
            return false;
        } else {
            $('#bgroup_error').html("");
        }
		*/

        if (dachild == '') {
            $('#dachild_error').html("Specify whether disabled or not!");
  Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Specify whether disabled or not!</span>');
            return false;
        } else {
            $('#dachild_error').html("");
        }

        if (dachild == 'yes') {
            if (phandicap == '' || !address_reg.test(phandicap)) {
                $('#phandicap_error').html("Specify disability!");
                Swal.fire('');
                return false;
            } else {
                $('#phandicap_error').html("");
            }
        }

        if (amhistory == '') {
            $('#amhistory_error').html("Specify this field!");
        Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Specify medical history!</span>');
            return false;
        } else {
            $('#amhistory_error').html("");
        }
        if (amhistory == 'yes') {
            if (mhistory == '' || !address_reg.test(mhistory)) {
                $('#mhistory_error').html("Specify medical history!");
          Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Specify medical history!</span>');
                return false;
            } else {
                $('#mhistory_error').html("");
            }
        }

        if (email == '') {
            $('#email_error').html("Specify email");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Specify email</span>');
            return false;
        } else {
            $('#email_error').html("");
        }

        if (!email_reg.test(email)) {
            $('#email_error').html("Kindly enter valid email-id!");
      Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Kindly enter valid email-id!</span>');
            return false;
        } else {
            $('#email_error').html("");
        }

        if (phoneno == '' || !mobile_reg.test(phoneno)) {
            $('#phoneno_error').html("Specify phone no");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Specify phone number.</span>');
            return false;
        } else {
            $('#phoneno_error').html("");
        }

        if (whatsappno == '' || !mobile_reg.test(whatsappno)) {
            $('#whatsappno_error').html("Specify whatsapp no");
         Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Specify whatsapp number</span>');
            return false;
        } else {
            $('#whatsappno_error').html("");
        }

        if (address == '' || !address_reg.test(address)) {
            $('#address_error').html("Provide address!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Provide address!</span>');
            return false;
        } else {
            $('#address_error').html("");
        }

        if (villageCity == '' || !city_name_reg.test(villageCity)) {
            $('#villageCity_error').html("Specify city!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Specify city!</span>');
            return false;
        } else {
            $('#villageCity_error').html("");
        }

        if (pincode == '' || !pincode_reg.test(pincode)) {
            $('#pincode_error').html("Provide pincode!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Provide pincode!</span>');
            return false;
        } else {
            $('#pincode_error').html("");
        }

        if (state == '' || !city_name_reg.test(state)) {
            $('#state_error').html("Choose state!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Choose state!</span>');
            return false;
        } else {
            $('#state_error').html("");
        }

        if (ecperson1 == '' || !full_name_reg.test(ecperson1)) {
            $('#ecperson1_error').html("Enter contact name!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter contact name!</span>');
            return false;
        } else {
            $('#ecperson1_error').html("");
        }
        if (ecrelation1 == '' || !city_name_reg.test(ecrelation1)) {
            $('#ecrelation1_error').html("Enter contact relation!");
         Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter contact relation!</span>');
            return false;
        } else {
            $('#ecrelation1_error').html("");
        }
        if (cpmobile1 == '' || !mobile_reg.test(cpmobile1)) {
            $('#cpmobile1_error').html("Enter contact mobile!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter contact mobile!</span>');
            return false;
        } else {
            $('#cpmobile1_error').html("");
        }

        if (ecperson2 == '' || !full_name_reg.test(ecperson2)) {
            $('#ecperson2_error').html("Enter contact name!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter contact name!</span>');
            return false;
        } else {
            $('#ecperson2_error').html("");
        }
        if (ecrelation2 == '' || !city_name_reg.test(ecrelation2)) {
            $('#ecrelation2_error').html("Enter contact relation!");
         Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter contact relation!</span>');
            return false;
        } else {
            $('#ecrelation2_error').html("");
        }
        if (cpmobile2 == '' || !mobile_reg.test(cpmobile2)) {
            $('#cpmobile2_error').html("Enter contact mobile!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter contact mobile!</span>');
            return false;
        } else {
            $('#cpmobile2_error').html("");
        }

        if (cpmobile1 == cpmobile2) {
            $('#cpmobile1_error').html("Mobile number should not be same!");
            $('#cpmobile2_error').html("Mobile number should not be same!");
   Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Provide different mobile number</span>');
            return false;
        } else {
            $('#cpmobile1_error').html("");
            $('#cpmobile2_error').html("");
        }

        if (transport_mode == '') {
            $('#transport_mode_error').html("Provide transport mode!");
        Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Provide transport mode!</span>');
            return false;
        } else {
            $('#transport_mode_error').html("");
        }


        if (goption == '') {
            $('#goption_error').html("Select guardian option!");
       Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Select guardian option!</span>');
            return false;
        } else {
            $('#goption_error').html("");
        }

        if (goption == 'parents') {
            if (ffname == '' || !part_name_reg.test(ffname)) {
                $('#ffname_error').html("Enter father's first name!");
                Swal.fire("Enter father's first name!");
                return false;
            } else {
                $('#ffname_error').html("");
            }
            if (flname == '' || !part_name_reg.test(flname)) {
                $('#flname_error').html("Enter father's last name!");
                Swal.fire("Enter father's last name!");
                return false;
            } else {
                $('#flname_error').html("");
            }
            // if (fqualification == '') {
            //     $('#fqualification_error').html("Enter qualification!");
            //     return false;
            // } else {
            //     $('#fqualification_error').html("");
            // }
            // if (foccupation == '') {
            //     $('#foccupation_error').html("Enter occupation!");
            //     return false;
            // } else {
            //     $('#foccupation_error').html("");
            // }
            // if (fworkdetails == '') {
            //     $('#fworkdetails_error').html("Enter workdetails!");
            //     return false;
            // } else {
            //     $('#fworkdetails_error').html("");
            // }
            // if (forganisationname == '') {
            //     $('#forganisationname_error').html("Enter organisation name!");
            //     return false;
            // } else {
            //     $('#forganisationname_error').html("");
            // }
            // if (fdesignation == '') {
            //     $('#fdesignation_error').html("Enter designation!");
            //     return false;
            // } else {
            //     $('#fdesignation_error').html("");
            // }
            // if (fincome == '') {
            //     $('#fincome_error').html("Enter anual income!");
            //     return false;
            // } else {
            //     $('#fincome_error').html("");
            // }

            if (femail == '') {
                $('#femail_error').html("Enter father's email!");
                Swal.fire("Enter father's email!");
                return false;
            } else {
                $('#femail_error').html("");
            }
            var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (!reg.test(femail)) {
                $('#femail_error').html("Kindly enter valid email-id!");
                Swal.fire('Kindly enter valid email-id!');
                return false;
            } else {
                $('#femail_error').html("");
            }
            if (fmobile == '' || !mobile_reg.test(fmobile)) {
                $('#fmobile_error').html("Enter father's mobile!");
                Swal.fire("Enter father's mobile!");
                return false;
            } else {
                $('#fmobile_error').html("");
            }

            if (fanumber == '' || !aadhar_reg.test(fanumber)) {
                $('#fanumber_error').html("Enter father's Aadhar!");
                Swal.fire("Enter father's Aadhar!");
                return false;
            } else {
                $('#fanumber_error').html("");
            }

            if (fpnumber != '' && !pan_reg.test(fpnumber)) {
                $('#fpnumber_error').html("Enter father's PAN number!");
                Swal.fire("Enter father's PAN number!");
                return false;
            } else {
                $('#fpnumber_error').html("");
            }


            if (mfname == '' || !part_name_reg.test(mfname)) {
                $('#mfname_error').html("Enter mother's first name!");
                Swal.fire("Enter mother's first name!");
                return false;
            } else {
                $('#mfname_error').html("");
            }
            // if (mlname == '' || !part_name_reg.test(mlname)) {
            //     $('#mlname_error').html("Enter mother's last name!");
            //     Swal.fire("Enter mother's last name!");
            //     return false;
            // } else {
            //     $('#mlname_error').html("");
            // }

            // if (mqualification == '') {
            //     $('#mqualification_error').html("Enter qualification!");
            //     return false;
            // } else {
            //     $('#mqualification_error').html("");
            // }
            // if (moccupation == '') {
            //     $('#moccupation_error').html("Enter occupation!");
            //     return false;
            // } else {
            //     $('#moccupation_error').html("");
            // }
            // if (mworkdetails == '') {
            //     $('#mworkdetails_error').html("Enter workdetails!");
            //     return false;
            // } else {
            //     $('#mworkdetails_error').html("");
            // }
            // if (morganisationname == '') {
            //     $('#morganisationname_error').html("Enter organisation name!");
            //     return false;
            // } else {
            //     $('#morganisationname_error').html("");
            // }
            // if (mdesignation == '') {
            //     $('#mdesignation_error').html("Enter designation!");
            //     return false;
            // } else {
            //     $('#mdesignation_error').html("");
            // }
            // if (mincome == '') {
            //     $('#mincome_error').html("Enter anual income!");
            //     return false;
            // } else {
            //     $('#mincome_error').html("");
            // }
            // if (memail == '') {
            //     $('#memail_error').html("Enter mother's email!");
            //     return false;
            // } else {
            //     $('#memail_error').html("");
            // }
            // if (!reg.test(memail)) {
            //     $('#memail_error').html("Kindly enter valid email-id!");
            //     return false;
            // } else {
            //     $('#memail_error').html("");
            // }
            // if (mmobile == '') {
            //     $('#mmobile_error').html("Enter mother's mobile!");
            //     return false;
            // } else {
            //     $('#mmobile_error').html("");
            // }
            if (manumber == '' || !aadhar_reg.test(manumber)) {
                $('#manumber_error').html("Enter Mother's Aadhar!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter Mothers Aadhar!</span>');
                return false;
            } else {
                $('#manumber_error').html("");
            }
            if (mpnumber != '' && !pan_reg.test(mpnumber)) {
                $('#mpnumber_error').html("Enter Mother's PAN number!");
         Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter Mothers PAN number!</span>');
                return false;
            } else {
                $('#mpnumber_error').html("");
            }

        } else {

            if (gfname == '' || !part_name_reg.test(gfname)) {
                $('#gfname_error').html("Enter guardian first name!");
        Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter guardian first name!</span>');
                return false;
            } else {
                $('#gfname_error').html("");
            }

            if (glname == '' || !part_name_reg.test(glname)) {
                $('#glname_error').html("Enter guardian last name!");
        Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter guardian last name!</span>');
                return false;
            } else {
                $('#glname_error').html("");
            }

            if (grelation == '') {
                $('#grelation_error').html("Specify guardian relation!");
        Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Specify guardian relation!</span>');
                return false;
            } else {
                $('#grelation_error').html("");
            }

            // if (gqualification == '') {
            //     $('#gqualification_error').html("Enter qualification!");
            //     return false;
            // } else {
            //     $('#gqualification_error').html("");
            // }
            // if (goccupation == '') {
            //     $('#goccupation_error').html("Enter occupation!");
            //     return false;
            // } else {
            //     $('#goccupation_error').html("");
            // }
            // if (gworkdetails == '') {
            //     $('#gworkdetails_error').html("Enter workdetails!");
            //     return false;
            // } else {
            //     $('#gworkdetails_error').html("");
            // }
            // if (gorganisationname == '') {
            //     $('#gorganisationname_error').html("Enter organisation name!");
            //     return false;
            // } else {
            //     $('#gorganisationname_error').html("");
            // }
            // if (gdesignation == '') {
            //     $('#gdesignation_error').html("Enter designation!");
            //     return false;
            // } else {
            //     $('#gdesignation_error').html("");
            // }
            // if (gincome == '') {
            //     $('#gincome_error').html("Enter anual income!");
            //     return false;
            // } else {
            //     $('#gincome_error').html("");
            // }
            // if (gemail == '') {
            //     $('#gemail_error').html("Enter mother's email!");
            //     return false;
            // } else {
            //     $('#gemail_error').html("");
            // }
            // if (!reg.test(gemail)) {
            //     $('#gemail_error').html("Kindly enter valid email-id!");
            //     return false;
            // } else {
            //     $('#gemail_error').html("");
            // }
            // if (gmobile == '') {
            //     $('#gmobile_error').html("Enter mobile number!");
            //     return false;
            // } else {
            //     $('#gmobile_error').html("");
            // }


        }

        if (siblingoption == '') {
            $('#siblingoption_error').html("Select sibling option!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Select sibling option!</span>');
            return false;
        } else {
            $('#siblingoption_error').html("");
        }

        if (siblingoption == 'yes') {
            if (sibling_other_name1 == '' || !full_name_reg.test(sibling_other_name1)) {
                $('#sibling_other_name1_error').html("Provide first sibling name!");
                Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Provide first sibling name!</span>');
                return false;
            } else {
                $('#sibling_other_name1_error').html("");
            }
            if (sibling_other_school1 == '' || !full_name_reg.test(sibling_other_school1)) {
                $('#sibling_other_school1_error').html("Provide first sibling school name!");
                Swal.fire('Provide first sibling school name!');
                return false;
            } else {
                $('#sibling_other_school1_error').html("");
            }
            if (sibling_other_class1 == '') {
                $('#sibling_other_class1_error').html("Provide first sibling class!");
                Swal.fire('Provide first sibling class!');
                return false;
            } else {
                $('#sibling_other_class1_error').html("");
            }
            if (sibling_other_age1 == '') {
                $('#sibling_other_age1_error').html("Provide first sibling's age!");
                Swal.fire("Provide first sibling's age!");
                return false;
            } else {
                $('#sibling_other_age1_error').html("");
            }

            if (sibling_other_name2 != '') {

                if (!full_name_reg.test(sibling_other_name2)) {
                    $('#sibling_other_name2_error').html("Provide second sibling name!");
                    Swal.fire('Provide second sibling name!');
                    return false;
                } else {
                    $('#sibling_other_name2_error').html("");
                }
                if (sibling_other_school2 == '' || !full_name_reg.test(sibling_other_school2)) {
                    $('#sibling_other_school2_error').html("Provide second sibling school name!");
                    Swal.fire('Provide second sibling school name!');
                    return false;
                } else {
                    $('#sibling_other_school2_error').html("");
                }
                if (sibling_other_class2 == '') {
                    $('#sibling_other_class2_error').html("Provide second sibling class!");
                    Swal.fire('Provide second sibling class!');
                    return false;
                } else {
                    $('#sibling_other_class2_error').html("");
                }
                if (sibling_other_age2 == '') {
                    $('#sibling_other_age2_error').html("Provide second sibling's age!");
                    Swal.fire("Provide second sibling's age!");
                    return false;
                } else {
                    $('#sibling_other_age2_error').html("");
                }

            }
        }

		var filename = $('#files').attr('filepath');
        if (filename == '') {
            // $('#filename_error').html("File is missing!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">File is missing or not uploaded!</span>');
            return false;
        } else {
            // $('#filename_error').html("");
        }
		
        if (captcha == '') {
            $('#captchacode_error').html("Enter captcha!");
            Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Enter captcha!</span>');
            return false;
        } else {
            $('#captchacode_error').html("");
        }

        var jsonarray = {
            "sfname": sfname,
            "smname": smname,
            "slname": slname,

            "dob": dob,
            "gender": gender,
            "category": category,

            "sought": sought,
            "cschool": cschool,
            "cclass": cclass,
            "caddress": caddress,

            "smtongue": smtongue,
            "sanumber": sanumber,

            "bgroup": bgroup,
            "dachild": dachild,
            "phandicap": phandicap,
            "amhistory": amhistory,
            "mhistory": mhistory,
            // communication info
            "email": email,
            "phoneno": phoneno,
            "whatsappno": whatsappno,
            "address": address,
            "villageCity": villageCity,
            "pincode": pincode,
            "state": state,
            "country": country,
            //emergency contact
            "ecperson1": ecperson1,
            "ecrelation1": ecrelation1,
            "ecmobile1": cpmobile1,
            "ecperson2": ecperson2,
            "ecrelation2": ecrelation2,
            "ecmobile2": cpmobile2,
            "transport_mode": transport_mode,
            "goption": goption,
            // father details
            "ffname": ffname,
            "fmname": fmname,
            "flname": flname,
            "fqualification": fqualification,
            "foccupation": foccupation,
            "forganisationname": forganisationname,
            "fdesignation": fdesignation,
            "fincome": fincome,
            "femail": femail,
            "fmobile": fmobile,
            "fanumber": fanumber,
            "fpnumber": fpnumber,
            // mother details
            "mfname": mfname,
            "mmname": mmname,
            "mlname": mlname,
            "mqualification": mqualification,
            "moccupation": moccupation,
            "morganisationname": morganisationname,
            "mdesignation": mdesignation,
            "mincome": mincome,
            "memail": memail,
            "mmobile": mmobile,
            "manumber": manumber,
            "mpnumber": mpnumber,
            // guardian details
            "gfname": gfname,
            "gmname": gmname,
            "glname": glname,
            "grelation": grelation,
            "gqualification": gqualification,
            "goccupation": goccupation,
            "gorganisationname": gorganisationname,
            "gdesignation": gdesignation,
            "gincome": gincome,
            "gemail": gemail,
            "gmobile": gmobile,

            "siblingoption": siblingoption,

            "sibling_other_name1": sibling_other_name1,
            "sibling_other_school1": sibling_other_school1,
            "sibling_other_class1": sibling_other_class1,
            "sibling_other_age1": sibling_other_age1,

            "sibling_other_name2": sibling_other_name2,
            "sibling_other_school2": sibling_other_school2,
            "sibling_other_class2": sibling_other_class2,
            "sibling_other_age2": sibling_other_age2,

			 "filename": filename,
			
            "_token": $('#_token').val(),
            "captcha": captcha
        };

        //console.log(JSON.stringify(jsonarray));

        var btn = $(item);
        $.ajax({
            type: "POST",
            url: "submit_online_application.php",
            dataType: "json",
            data: JSON.stringify(jsonarray),
            beforeSend: function() {
                console.log(JSON.stringify(jsonarray));
                $(item).prop('disabled', true);
                $(item).html('Please wait...');
            },
            success: function(data) {
                console.log(JSON.stringify(data));

                if (data.status == 'success') {
                    //Swal.fire(data.message);
                    $('<br><br><div class="alert alert-success">' + data.message + '</div>').insertAfter(btn);
                    $(item).remove();
                    $('.form-control').val('');
                }

                if (data.sfname_error != '') {
                    $('#sfname_error').html(data.sfname_error);
                } else {
                    $('#sfname_error').html('');
                }
                if (data.slname_error != '') {
                    $('#slname_error').html(data.slname_error);
                } else {
                    $('#slname_error').html('');
                }

                if (data.sought_error != '') {
                    $('#sought_error').html(data.sought_error);
                } else {
                    $('#sought_error').html('');
                }

                if (data.cschool_error != '') {
                    $('#cschool_error').html(data.cschool_error);
                } else {
                    $('#cschool_error').html('');
                }

                if (data.cclass_error != '') {
                    $('#cclass_error').html(data.cclass_error);
                } else {
                    $('#cclass_error').html('');
                }

                if (data.caddress_error != '') {
                    $('#caddress_error').html(data.caddress_error);
                } else {
                    $('#caddress_error').html('');
                }

                if (data.dob_error != '') {
                    $('#dob_error').html(data.dob_error);
                } else {
                    $('#dob_error').html('');
                }

                if (data.gender_error != '') {
                    $('#gender_error').html(data.gender_error);
                } else {
                    $('#gender_error').html('');
                }

                if (data.category_error != '') {
                    $('#category_error').html(data.category_error);
                } else {
                    $('#category_error').html('');
                }

                if (data.bgroup_error != '') {
                    $('#bgroup_error').html(data.bgroup_error);
                } else {
                    $('#bgroup_error').html('');
                }

                if (data.dachild_error != '') {
                    $('#dachild_error').html(data.dachild_error);
                } else {
                    $('#dachild_error').html('');
                }

                if (data.amhistory_error != '') {
                    $('#amhistory_error').html(data.amhistory_error);
                } else {
                    $('#amhistory_error').html('');
                }

                if (data.email_error != '') {
                    $('#email_error').html(data.email_error);
                } else {
                    $('#email_error').html('');
                }

                if (data.phoneno_error != '') {
                    $('#phoneno_error').html(data.phoneno_error);
                } else {
                    $('#phoneno_error').html('');
                }

                if (data.whatsappno_error != '') {
                    $('#whatsappno_error').html(data.whatsappno_error);
                } else {
                    $('#whatsappno_error').html('');
                }

                if (data.address_error != '') {
                    $('#address_error').html(data.address_error);
                } else {
                    $('#address_error').html('');
                }

                if (data.villageCity_error != '') {
                    $('#villageCity_error').html(data.villageCity_error);
                } else {
                    $('#villageCity_error').html('');
                }

                if (data.pincode_error != '') {
                    $('#pincode_error').html(data.pincode_error);
                } else {
                    $('#pincode_error').html('');
                }

                if (data.state_error != '') {
                    $('#state_error').html(data.state_error);
                } else {
                    $('#state_error').html('');
                }

                if (data.country_error != '') {
                    $('#country_error').html(data.country_error);
                } else {
                    $('#country_error').html('');
                }

                if (data.ecperson1_error != '') {
                    $('#ecperson1_error').html(data.ecperson1_error);
                } else {
                    $('#ecperson1_error').html('');
                }
                if (data.ecperson2_error != '') {
                    $('#ecperson2_error').html(data.ecperson2_error);
                } else {
                    $('#ecperson2_error').html('');
                }

                if (data.ecrelation1_error != '') {
                    $('#ecrelation1_error').html(data.ecrelation1_error);
                } else {
                    $('#ecrelation1_error').html('');
                }
                if (data.ecrelation2_error != '') {
                    $('#ecrelation2_error').html(data.ecrelation2_error);
                } else {
                    $('#ecrelation2_error').html('');
                }

                if (data.ecmobile1_error != '') {
                    $('#ecmobile1_error').html(data.ecmobile1_error);
                } else {
                    $('#ecmobile1_error').html('');
                }
                if (data.ecmobile2_error != '') {
                    $('#ecmobile2_error').html(data.ecmobile2_error);
                } else {
                    $('#ecmobile2_error').html('');
                }

                if (data.transport_mode_error != '') {
                    $('#transport_mode_error').html(data.transport_mode_error);
                } else {
                    $('#transport_mode_error').html('');
                }

                if (data.goption_error != '') {
                    $('#goption_error').html(data.goption_error);
                } else {
                    $('#goption_error').html('');
                }

                if (data.ffname_error != '') {
                    $('#ffname_error').html(data.ffname_error);
                } else {
                    $('#ffname_error').html('');
                }
                if (data.fmname_error != '') {
                    $('#fmname_error').html(data.fmname_error);
                } else {
                    $('#fmname_error').html('');
                }
                if (data.flname_error != '') {
                    $('#flname_error').html(data.flname_error);
                } else {
                    $('#flname_error').html('');
                }

                if (data.fqualification_error != '') {
                    $('#fqualification_error').html(data.fqualification_error);
                } else {
                    $('#fqualification_error').html('');
                }

                if (data.foccupation_error != '') {
                    $('#foccupation_error').html(data.foccupation_error);
                } else {
                    $('#foccupation_error').html('');
                }

                if (data.forganisationname_error != '') {
                    $('#forganisationname_error').html(data.forganisationname_error);
                } else {
                    $('#forganisationname_error').html('');
                }

                if (data.fdesignation_error != '') {
                    $('#fdesignation_error').html(data.fdesignation_error);
                } else {
                    $('#fdesignation_error').html('');
                }

                if (data.fincome_error != '') {
                    $('#fincome_error').html(data.fincome_error);
                } else {
                    $('#fincome_error').html("");
                }

                if (data.femail_error != '') {
                    $('#femail_error').html(data.femail_error);
                } else {
                    $('#femail_error').html("");
                }

                if (data.fmobile_error != '') {
                    $('#fmobile_error').html(data.fmobile_error);
                } else {
                    $('#fmobile_error').html("");
                }

                if (data.mfname_error != '') {
                    $('#mfname_error').html(data.mfname_error);
                } else {
                    $('#mfname_error').html('');
                }
                if (data.mmname_error != '') {
                    $('#mmname_error').html(data.mmname_error);
                } else {
                    $('#mmname_error').html('');
                }
                // if (data.mlname_error != '') {
                //     $('#mlname_error').html(data.mlname_error);
                // } else {
                //     $('#mlname_error').html('');
                // }

                if (data.mqualification_error != '') {
                    $('#mqualification_error').html(data.mqualification_error);
                } else {
                    $('#mqualification_error').html('');
                }

                if (data.moccupation_error != '') {
                    $('#moccupation_error').html(data.moccupation_error);
                } else {
                    $('#moccupation_error').html('');
                }

                if (data.morganisationname_error != '') {
                    $('#morganisationname_error').html(data.morganisationname_error);
                } else {
                    $('#morganisationname_error').html('');
                }

                if (data.mdesignation_error != '') {
                    $('#mdesignation_error').html(data.mdesignation_error);
                } else {
                    $('#mdesignation_error').html('');
                }

                if (data.mincome_error != '') {
                    $('#mincome_error').html(data.mincome_error);
                } else {
                    $('#mincome_error').html("");
                }

                if (data.memail_error != '') {
                    $('#memail_error').html(data.memail_error);
                } else {
                    $('#memail_error').html("");
                }

                if (data.mmobile_error != '') {
                    $('#mmobile_error').html(data.mmobile_error);
                } else {
                    $('#mmobile_error').html("");
                }

                if (data.guardian_error != '') {
                    $('#guardian_error').html(data.guardian_error);
                } else {
                    $('#guardian_error').html("");
                }

                if (data.grelation_error != '') {
                    $('#grelation_error').html(data.grelation_error);
                } else {
                    $('#grelation_error').html("");
                }

                if (data.gqualification_error != '') {
                    $('#gqualification_error').html(data.gqualification_error);
                } else {
                    $('#gqualification_error').html('');
                }

                if (data.goccupation_error != '') {
                    $('#goccupation_error').html(data.goccupation_error);
                } else {
                    $('#goccupation_error').html('');
                }

                if (data.gorganisationname_error != '') {
                    $('#gorganisationname_error').html(data.gorganisationname_error);
                } else {
                    $('#gorganisationname_error').html('');
                }

                if (data.gdesignation_error != '') {
                    $('#gdesignation_error').html(data.gdesignation_error);
                } else {
                    $('#gdesignation_error').html('');
                }

                if (data.gincome_error != '') {
                    $('#gincome_error').html(data.gincome_error);
                } else {
                    $('#gincome_error').html("");
                }

                if (data.gemail_error != '') {
                    $('#gemail_error').html(data.gemail_error);
                } else {
                    $('#gemail_error').html("");
                }

                if (data.gmobile_error != '') {
                    $('#gmobile_error').html(data.gmobile_error);
                } else {
                    $('#gmobile_error').html("");
                }

                if (data.siblingoption_error != '') {
                    $('#siblingoption_error').html(data.siblingoption_error);
                } else {
                    $('#siblingoption_error').html("");
                }

                if (data.captchacode_error != '') {
                    $('#captchacode_error').html(data.captchacode_error);
                } else {
                    $('#captchacode_error').html("");
                }


            },
            error: function(err) {
                Swal.fire("Error !!, system error, please try some time later.");
                console.log(JSON.stringify(err));
                $(item).html('Submit');
                $(item).prop('disabled', false);
                // workingbool = true;

                return false;
            },
            complete: function() {
                $(item).html('Submit');
                $(item).prop('disabled', false);
            }
        });

    }
</script>
<script>
    $('#files').change(function() {

        if (typeof(FileReader) != "undefined") {

            var image_holder = $("#image-holder");
            image_holder.empty();

            var reader = new FileReader();
            reader.onload = function(e) {
                $("<img />", {
                    "src": e.target.result,
                    "class": "img-responsive img-thumbnail",
                    "style": " height:200px;"
                }).appendTo(image_holder);
            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[0]);

            var size = $(this)[0].files[0].size;
            var name = $(this)[0].files[0].name;
            var extension = name.split('.').pop().toLowerCase();

            $('#fileInfo').html("<label class='text-success'>File Name: " + name +
                "<br>File Extension: " + extension +
                "<br>File Size: " + (size / 1024).toFixed(1) +
                "KB</label>");

            if (size >= 20480 && size <= 256000) {
                // 20kb- 250kb in size
                $('#uploadBtn1').prop("disabled", false);
                $('#uploadBtn2').prop("disabled", false);
                $('#error').html("<label class='text-danger'></lable>");
            } else {
                Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Inappropriate file size.</span>');
                $('#error').html("<label class='text-danger'>Inappropriate file size.</lable>");
                $('#uploadBtn1').prop("disabled", true);
                $('#uploadBtn2').prop("disabled", true);
            }
            if (jQuery.inArray(extension, ['png','jpg', 'jpeg']) == -1) {
                Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">Inappropriate file type.</span>');
                $('#error').html("<label class='text-danger'>Inappropriate file type.</lable>");
                $('#uploadBtn1').prop("disabled", true);
                $('#uploadBtn2').prop("disabled", true);
            }

            //$('#uploadBtn1').attr('disabled', false);

        } else {
            alert("This browser does not support FileReader.");
        }
    });

    $('#uploadBtn1').click(function() {

        var filedata = $('#files')[0].files[0];
        if (filedata.length != 0) {
            var error = '';
            var form_data = new FormData();
            form_data.append('uploadfile', filedata);
            $.ajax({
                url: 'upload_student_photo.php',
                type: 'POST',
                data: form_data,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {

                    if (response.chk == 'success') {
                        $('#files').attr('filepath', response.path);

                        console.log(response.path);
                        console.log("File successfully uploaded");
                        Swal.fire('<span style="font-family:poppins,Geneva,sans-serif;font-size:14px;font-style:normal;">File successfully uploaded!</span>');

                    } else {
                        alert('Sorry, there was an error uploading your file....');
                    }
                },
                error: function(err) {

                    alert('Sorry, there was an error uploading your file...');
                }
            });


        } else {
            alert("No file selected");
        }
    });
</script>
</body>
</html>