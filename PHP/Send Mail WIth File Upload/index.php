<?php include 'header.php';?>


<div class="page_header_default style_one ">
    <div class="parallax_cover">
        <img src="assets/images/page-header-default.jpg" alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            Click To Apply
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="index.php">Home</a> </li>
                            <li class="active">Click to Apply</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-section">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-12 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections text-center">
                        <!--<div class="before_title">Careers </div>-->
                        <h2>Job Application Form</h2>
                        <p>Please Fill Out the Form Below to Submit Your Job Application!</p>
                    </div>
                </div>
                <div class="contact_form_box_all type_one">
                    <div class="contact_form_box_inner">
                        <div class="contact_form_shortcode">
                            <form id="myForm" name="contact_form" method="post" enctype="multipart/form-data"
                                class="default-form">
                                <div id="check1"></div>

                                <div class="controls">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Your Name<br></label>
                                                <input type="text" name="name" id="name" placeholder="Your Name *"
                                                    data-error="Enter Your Name">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Your Email<br></label>
                                                <input type="text" name="email" id="email" placeholder="Email *"
                                                    data-error="Enter Your Email Id">
                                                <div class="help-block with-errors"></div>
                                            </div>

                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label> Your Phone Number<br></label>
                                                <input type="text" name="phone" id="phone" placeholder="Phone Number *"
                                                    data-error="Enter Your Email Id">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label>Gender<br></label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="inlineRadio1" value="Male" style="width:15px ;">
                                                <label class="form-check-label" for="inlineRadio1"
                                                    style="display:inline;"> &nbsp; &nbsp; &nbsp; Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="inlineRadio2" value="Female" style="width:15px ;">
                                                <label class="form-check-label" for="inlineRadio2"
                                                    style="display:inline;"> &nbsp; &nbsp; &nbsp; Female</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Country</label>
                                                <select name="country" class="form-control">
                                                    <option value="">Select Country</option>
                                                    <option value="AF^93">Afghanistan</option>
                                                    <option value="AL^335">Albania</option>
                                                    <option value="DZ^213">Algeria</option>
                                                    <option value="AS^684">American Samoa</option>
                                                    <option value="AD^376">Andorra</option>
                                                    <option value="AO^244">Angola</option>
                                                    <option value="AI^264">Anguilla</option>
                                                    <option value="AQ^672">Antarctica</option>
                                                    <option value="AG^268">Antigua and Barbuda</option>
                                                    <option value="AR^54">Argentina</option>
                                                    <option value="AM^374">Armenia</option>
                                                    <option value="AW^297">Aruba</option>
                                                    <option value="AU^61">Australia</option>
                                                    <option value="AT^43">Austria</option>
                                                    <option value="AZ^994">Azerbaijan</option>
                                                    <option value="BS^242">Bahamas</option>
                                                    <option value="BH^973">Bahrain</option>
                                                    <option value="BD^880">Bangladesh</option>
                                                    <option value="BB^246">Barbados</option>
                                                    <option value="BY^375">Belarus</option>
                                                    <option value="BE^32">Belgium</option>
                                                    <option value="BZ^501">Belize</option>
                                                    <option value="BJ^229">Benin</option>
                                                    <option value="BM^441">Bermuda</option>
                                                    <option value="BT^975">Bhutan</option>
                                                    <option value="BO^591">Bolivia</option>
                                                    <option value="BA^387">Bosnia and Herzegowina</option>
                                                    <option value="BW^267">Botswana</option>
                                                    <option value="BV^47">Bouvet Island</option>
                                                    <option value="BR^55">Brazil</option>
                                                    <option value="IO^246">British Indian Ocean Territory</option>
                                                    <option value="BN^673">Brunei Darussalam</option>
                                                    <option value="BG^359">Bulgaria</option>
                                                    <option value="BF^226">Burkina Faso</option>
                                                    <option value="BI^257">Burundi</option>
                                                    <option value="KH^855">Cambodia</option>
                                                    <option value="CM^237">Cameroon</option>
                                                    <option value="CA^1">Canada</option>
                                                    <option value="CV^238">Cape Verde</option>
                                                    <option value="KY^345">Cayman Islands</option>
                                                    <option value="CF^236">Central African Republic</option>
                                                    <option value="TD^235">Chad</option>
                                                    <option value="CL^56">Chile</option>
                                                    <option value="CN^86">China</option>
                                                    <option value="CX^61">Christmas Island</option>
                                                    <option value="CC^61">Cocos (Keeling) Islands</option>
                                                    <option value="CO^57">Colombia</option>
                                                    <option value="KM^269">Comoros</option>
                                                    <option value="CG^242">Congo</option>
                                                    <option value="ZR^243">Congo, The Democratic Republic Of The
                                                    </option>
                                                    <option value="CK^682">Cook Islands</option>
                                                    <option value="CR^506">Costa Rica</option>
                                                    <option value="HR^385">Croatia (local name: Hrvatska)</option>
                                                    <option value="CU^53">Cuba</option>
                                                    <option value="CY^357">Cyprus</option>
                                                    <option value="CZ^420">Czech Republic</option>
                                                    <option value="DK^45">Denmark</option>
                                                    <option value="DJ^253">Djibouti</option>
                                                    <option value="DM^767">Dominica</option>
                                                    <option value="DO^809">Dominican Republic</option>
                                                    <option value="TP^670">East Timor</option>
                                                    <option value="EC^593">Ecuador</option>
                                                    <option value="EG^20">Egypt</option>
                                                    <option value="SV^503">El Salvador</option>
                                                    <option value="GQ^240">Equatorial Guinea</option>
                                                    <option value="ER^291">Eritrea</option>
                                                    <option value="EE^372">Estonia</option>
                                                    <option value="ET^251">Ethiopia</option>
                                                    <option value="FK^500">Falkland Islands (Malvinas)</option>
                                                    <option value="FO^298">Faroe Islands</option>
                                                    <option value="FJ^679">Fiji</option>
                                                    <option value="FI^358">Finland</option>
                                                    <option value="FR^33">France</option>
                                                    <option value="FX^590">France Metropolitan</option>
                                                    <option value="GF^594">French Guiana</option>
                                                    <option value="PF^689">French Polynesia</option>
                                                    <option value="TF^590">French Southern Territories</option>
                                                    <option value="GA^241">Gabon</option>
                                                    <option value="GM^220">Gambia</option>
                                                    <option value="GE^995">Georgia</option>
                                                    <option value="DE^49">Germany</option>
                                                    <option value="GH^233">Ghana</option>
                                                    <option value="GI^350">Gibraltar</option>
                                                    <option value="GR^30">Greece</option>
                                                    <option value="GL^299">Greenland</option>
                                                    <option value="GD^809">Grenada</option>
                                                    <option value="GP^590">Guadeloupe</option>
                                                    <option value="GU^1">Guam</option>
                                                    <option value="GT^502">Guatemala</option>
                                                    <option value="GN^224">Guinea</option>
                                                    <option value="GW^245">Guinea-Bissau</option>
                                                    <option value="GY^592">Guyana</option>
                                                    <option value="HT^509">Haiti</option>
                                                    <option value="HM^61">Heard and Mc Donald Islands</option>
                                                    <option value="HN^504">Honduras</option>
                                                    <option value="HK^852">Hong Kong</option>
                                                    <option value="HU^36">Hungary</option>
                                                    <option value="IS^354">Iceland</option>
                                                    <option value="IN^91">India</option>
                                                    <option value="ID^62">Indonesia</option>
                                                    <option value="IR^98">Iran (Islamic Republic of)</option>
                                                    <option value="IQ^964">Iraq</option>
                                                    <option value="IE^353">Ireland</option>
                                                    <option value="IL^972">Israel</option>
                                                    <option value="IT^39">Italy</option>
                                                    <option value="JM^876">Jamaica</option>
                                                    <option value="JP^81">Japan</option>
                                                    <option value="JO^962">Jordan</option>
                                                    <option value="KZ^7">Kazakhstan</option>
                                                    <option value="KE^254">Kenya</option>
                                                    <option value="KI^686">Kiribati</option>
                                                    <option value="KW^965">Kuwait</option>
                                                    <option value="KG^7">Kyrgyzstan</option>
                                                    <option value="LA^856">Laos</option>
                                                    <option value="LV^371">Latvia</option>
                                                    <option value="LB^961">Lebanon</option>
                                                    <option value="LS^266">Lesotho</option>
                                                    <option value="LR^231">Liberia</option>
                                                    <option value="LY^218">Libyan Arab Jamahiriya</option>
                                                    <option value="LI^423">Liechtenstein</option>
                                                    <option value="LT^370">Lithuania</option>
                                                    <option value="LU^352">Luxembourg</option>
                                                    <option value="MO^853">Macao</option>
                                                    <option value="MK^389">Macedonia</option>
                                                    <option value="MG^261">Madagascar</option>
                                                    <option value="MW^265">Malawi</option>
                                                    <option value="MY^60">Malaysia</option>
                                                    <option value="MV^960">Maldives</option>
                                                    <option value="ML^223">Mali</option>
                                                    <option value="MT^356">Malta</option>
                                                    <option value="MH^692">Marshall Islands</option>
                                                    <option value="MQ^596">Martinique</option>
                                                    <option value="MR^222">Mauritania</option>
                                                    <option value="MU^230">Mauritius</option>
                                                    <option value="YT^269">Mayotte</option>
                                                    <option value="MX^52">Mexico</option>
                                                    <option value="FM^691">Micronesia</option>
                                                    <option value="MD^373">Moldova</option>
                                                    <option value="MC^377">Monaco</option>
                                                    <option value="MN^976">Mongolia</option>
                                                    <option value="ME^382">Montenegro</option>
                                                    <option value="MS^664">Montserrat</option>
                                                    <option value="MA^212">Morocco</option>
                                                    <option value="MZ^258">Mozambique</option>
                                                    <option value="MM^95">Myanmar</option>
                                                    <option value="NA^264">Namibia</option>
                                                    <option value="NR^674">Nauru</option>
                                                    <option value="NP^977">Nepal</option>
                                                    <option value="NL^31">Netherlands</option>
                                                    <option value="AN^599">Netherlands Antilles</option>
                                                    <option value="NC^687">New Caledonia</option>
                                                    <option value="NZ^64">New Zealand</option>
                                                    <option value="NI^505">Nicaragua</option>
                                                    <option value="NE^227">Niger</option>
                                                    <option value="NG^234">Nigeria</option>
                                                    <option value="NU^683">Niue</option>
                                                    <option value="NF^672">Norfolk Island</option>
                                                    <option value="KP^850">North Korea</option>
                                                    <option value="MP^670">Northern Mariana Islands</option>
                                                    <option value="NO^47">Norway</option>
                                                    <option value="OM^968">Oman</option>
                                                    <option value="OT^93">Other Country</option>
                                                    <option value="PK^92">Pakistan</option>
                                                    <option value="PW^680">Palau</option>
                                                    <option value="PA^507">Panama</option>
                                                    <option value="PG^675">Papua New Guinea</option>
                                                    <option value="PY^595">Paraguay</option>
                                                    <option value="PE^51">Peru</option>
                                                    <option value="PH^63">Philippines</option>
                                                    <option value="PN^872">Pitcairn</option>
                                                    <option value="PL^48">Poland</option>
                                                    <option value="PT^351">Portugal</option>
                                                    <option value="PR^787">Puerto Rico</option>
                                                    <option value="QA^974">Qatar</option>
                                                    <option value="RE^262">Reunion</option>
                                                    <option value="RO^40">Romania</option>
                                                    <option value="RU^7">Russian Federation</option>
                                                    <option value="RW^250">Rwanda</option>
                                                    <option value="KN^869">Saint Kitts and Nevis</option>
                                                    <option value="LC^758">Saint Lucia</option>
                                                    <option value="VC^784">Saint Vincent and the Grenadines</option>
                                                    <option value="WS^685">Samoa</option>
                                                    <option value="SM^378">San Marino</option>
                                                    <option value="ST^239">Sao Tome and Principe</option>
                                                    <option value="SA^966">Saudi Arabia</option>
                                                    <option value="SN^221">Senegal</option>
                                                    <option value="RS^381">Serbia</option>
                                                    <option value="SC^248">Seychelles</option>
                                                    <option value="SL^232">Sierra Leone</option>
                                                    <option value="SG^65">Singapore</option>
                                                    <option value="SK^421">Slovakia (Slovak Republic)</option>
                                                    <option value="SI^386">Slovenia</option>
                                                    <option value="SB^677">Solomon Islands</option>
                                                    <option value="SO^252">Somalia</option>
                                                    <option value="ZA^27">South Africa</option>
                                                    <option value="KR^82">South Korea</option>
                                                    <option value="ES^34">Spain</option>
                                                    <option value="LK^94">Sri Lanka</option>
                                                    <option value="SH^290">St. Helena</option>
                                                    <option value="PM^508">St. Pierre and Miquelon</option>
                                                    <option value="SD^249">Sudan</option>
                                                    <option value="SR^597">Suriname</option>
                                                    <option value="SJ^47">Svalbard and Jan Mayen Islands</option>
                                                    <option value="SZ^268">Swaziland</option>
                                                    <option value="SE^46">Sweden</option>
                                                    <option value="CH^41">Switzerland</option>
                                                    <option value="SY^963">Syrian Arab Republic</option>
                                                    <option value="TW^886">Taiwan</option>
                                                    <option value="TJ^7">Tajikistan</option>
                                                    <option value="TZ^255">Tanzania</option>
                                                    <option value="TH^66">Thailand</option>
                                                    <option value="TG^228">Togo</option>
                                                    <option value="TK^64">Tokelau</option>
                                                    <option value="TO^676">Tonga</option>
                                                    <option value="TT^868">Trinidad and Tobago</option>
                                                    <option value="TN^216">Tunisia</option>
                                                    <option value="TR^90">Turkey</option>
                                                    <option value="TM^993">Turkmenistan</option>
                                                    <option value="TC^649">Turks and Caicos Islands</option>
                                                    <option value="TV^688">Tuvalu</option>
                                                    <option value="UG^256">Uganda</option>
                                                    <option value="UA^380">Ukraine</option>
                                                    <option value="AE^971">United Arab Emirates</option>
                                                    <option value="UK^44">United Kingdom</option>
                                                    <option value="US^1">United States</option>
                                                    <option value="UM^1">United States Minor Outlying Islands</option>
                                                    <option value="UY^598">Uruguay</option>
                                                    <option value="UZ^998">Uzbekistan</option>
                                                    <option value="VU^678">Vanuatu</option>
                                                    <option value="VA^39">Vatican City State (Holy See)</option>
                                                    <option value="VE^58">Venezuela</option>
                                                    <option value="VN^84">Vietnam</option>
                                                    <option value="VG^1">Virgin Islands (British)</option>
                                                    <option value="VI^1">Virgin Islands (U.S.)</option>
                                                    <option value="WF^681">Wallis And Futuna Islands</option>
                                                    <option value="EH^212">Western Sahara</option>
                                                    <option value="YE^967">Yemen</option>
                                                    <option value="YU^381">Yugoslavia</option>
                                                    <option value="ZM^260">Zambia</option>
                                                    <option value="ZW^263">Zimbabwe</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> City<br></label>
                                                <input type="text" name="city" placeholder="City *"
                                                    data-error="Enter Your City">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Education Details <br></label>
                                                <textarea name="education" rows="2"
                                                    data-error="Please, enter your education details."
                                                    style="height:50px;"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Total Work Experience </label>
                                                <select name="experience_years" class="form-control">

                                                    <option selected="selected" value="">--Select Year--</option>
                                                    <option value="0">Fresher</option>
                                                    <option value="1">1 Years</option>
                                                    <option value="2">2 Years</option>
                                                    <option value="3">3 Years</option>
                                                    <option value="4">4 Years</option>
                                                    <option value="5">5 Years</option>
                                                    <option value="6">6 Years</option>
                                                    <option value="7">7 Years</option>
                                                    <option value="8">8 Years</option>
                                                    <option value="9">9 Years</option>
                                                    <option value="10">10 Years</option>
                                                    <option value="11">11 Years</option>
                                                    <option value="12">12 Years</option>
                                                    <option value="13">13 Years</option>
                                                    <option value="14">14 Years</option>
                                                    <option value="15">15 Years</option>
                                                    <option value="16">16 Years</option>
                                                    <option value="17">17 Years</option>
                                                    <option value="18">18 Years</option>
                                                    <option value="19">19 Years</option>
                                                    <option value="20">20 Years</option>
                                                    <option value="21">21 Years</option>
                                                    <option value="22">22 Years</option>
                                                    <option value="23">23 Years</option>
                                                    <option value="24">24 Years</option>
                                                    <option value="25">25 Years</option>
                                                    <option value="26">26 Years</option>
                                                    <option value="27">27 Years</option>
                                                    <option value="28">28 Years</option>
                                                    <option value="29">29 Years</option>
                                                    <option value="30">30 Years</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label></label>
                                                <select name="experience_months" class="form-control">

                                                    <option value="0">--Select Months--</option>
                                                    <option value="1">1 Months</option>
                                                    <option value="2">2 Months</option>
                                                    <option value="3">3 Months</option>
                                                    <option value="4">4 Months</option>
                                                    <option value="5">5 Months</option>
                                                    <option value="6">6 Months</option>
                                                    <option value="7">7 Months</option>
                                                    <option value="8">8 Months</option>
                                                    <option value="9">9 Months</option>
                                                    <option value="10">10 Months</option>
                                                    <option value="11">11 Months</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Key skills <br></label>
                                                <textarea name="key_skills" rows="2"
                                                    data-error="Please, enter your key skills."
                                                    style="height:50px;"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelectl">Current Annual Salary </label>
                                                <select name="salary_lakhs" class="form-control">
                                                    <option value="">Lakhs</option>
                                                    <option value="100000">1</option>
                                                    <option value="200000">2</option>
                                                    <option value="300000">3</option>
                                                    <option value="400000">4</option>
                                                    <option value="500000">5</option>
                                                    <option value="600000">6</option>
                                                    <option value="700000">7</option>
                                                    <option value="800000">8</option>
                                                    <option value="900000">9</option>
                                                    <option value="1000000">10</option>
                                                    <option value="1100000">11</option>
                                                    <option value="1200000">12</option>
                                                    <option value="1300000">13</option>
                                                    <option value="1400000">14</option>
                                                    <option value="1500000">15</option>
                                                    <option value="1600000">16</option>
                                                    <option value="1700000">17</option>
                                                    <option value="1800000">18</option>
                                                    <option value="1900000">19</option>
                                                    <option value="2000000">20</option>
                                                    <option value="2100000">21</option>
                                                    <option value="2200000">22</option>
                                                    <option value="2300000">23</option>
                                                    <option value="2400000">24</option>
                                                    <option value="2500000">25</option>
                                                    <option value="2600000">26</option>
                                                    <option value="2700000">27</option>
                                                    <option value="2800000">28</option>
                                                    <option value="2900000">29</option>
                                                    <option value="3000000">30</option>
                                                    <option value="3100000">31</option>
                                                    <option value="3200000">32</option>
                                                    <option value="3300000">33</option>
                                                    <option value="3400000">34</option>
                                                    <option value="3500000">35</option>
                                                    <option value="3600000">36</option>
                                                    <option value="3700000">37</option>
                                                    <option value="3800000">38</option>
                                                    <option value="3900000">39</option>
                                                    <option value="4000000">40</option>
                                                    <option value="4100000">41</option>
                                                    <option value="4200000">42</option>
                                                    <option value="4300000">43</option>
                                                    <option value="4400000">44</option>
                                                    <option value="4500000">45</option>
                                                    <option value="4600000">46</option>
                                                    <option value="4700000">47</option>
                                                    <option value="4800000">48</option>
                                                    <option value="4900000">49</option>
                                                    <option value="5000000">50</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label></label>
                                                <select name="salary_thousands" class="form-control">
                                                    <option value="">Thousands</option>
                                                    <option value="5000">5</option>
                                                    <option value="10000">10</option>
                                                    <option value="15000">15</option>
                                                    <option value="20000">20</option>
                                                    <option value="25000">25</option>
                                                    <option value="30000">30</option>
                                                    <option value="35000">35</option>
                                                    <option value="40000">40</option>
                                                    <option value="45000">45</option>
                                                    <option value="50000">50</option>
                                                    <option value="55000">55</option>
                                                    <option value="60000">60</option>
                                                    <option value="65000">65</option>
                                                    <option value="70000">70</option>
                                                    <option value="75000">75</option>
                                                    <option value="80000">80</option>
                                                    <option value="85000">85</option>
                                                    <option value="90000">90</option>
                                                    <option value="95000">95</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label> Upload Your CV <br></label>

                                                <input type="file" name="file" style="padding:15px;">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group mg_top apbtn">
                                                <input type="submit" name="submit" id="btn_submit" value="Appointment"
                                                    class="theme_btn">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_top_70"></div>
    <!--===============spacing==============-->
</section>


<?php include 'footer.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#myForm').submit(function(e) {
        e.preventDefault();

        // Fetch input values
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var gender = $("input[name='gender']:checked").val();
        var country = $('select[name="country"]').val(); // Corrected to match your select
        var city = $('input[name="city"]').val(); // Corrected to match your input
        var educationDetails = $('textarea[name="education"]')
            .val(); // Corrected to match your textarea
        var workExperienceYears = $('select[name="experience_years"]')
            .val(); // Corrected to match your select
        var workExperienceMonths = $('select[name="experience_months"]')
            .val(); // Corrected to match your select
        var keySkills = $('textarea[name="key_skills"]').val(); // Corrected to match your textarea
        var currentSalaryLakhs = $('select[name="salary_lakhs"]')
            .val(); // Corrected to match your select
        var currentSalaryThousands = $('select[name="salary_thousands"]')
            .val(); // Corrected to match your select
        var fileInput = $('input[name="file"]'); // Corrected to match your file input
        var file = fileInput.get(0).files[0];

        // Reset error message
        $('#check1').html('');

        // Validation regex
        var name_regex = /^[a-zA-Z\s]*$/;
        var email_regex =
            /\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\.info)|(\.in)|(\.biz)|(\..{2,2}))$)\b/gi;
        var mobile_regex = /^\d{10}$/;

        // Validate Name
        if (!name.match(name_regex) || name === "") {
            $('#check1').html('** Please Enter a Valid Name **').css("color", "red");
            $("#name").focus();
            return false;
        }

        // Validate Email
        if (!email.match(email_regex) || email === "") {
            $('#check1').html('** Please Enter a Valid Email **').css("color", "red");
            $("#email").focus();
            return false;
        }

        // Validate Phone
        if (!phone.match(mobile_regex) || phone === "") {
            $('#check1').html('** Please Enter a Valid Phone No **').css("color", "red");
            $("#phone").focus();
            return false;
        }

        // Validate Gender
        if (!gender) {
            $('#check1').html('** Please Select Your Gender **').css("color", "red");
            return false;
        }

        // Validate Country
        if (country === "") {
            $('#check1').html('** Please Select a Country **').css("color", "red");
            $("select[name='country']").focus();
            return false;
        }

        // Validate City
        if (city === "") {
            $('#check1').html('** Please Enter Your City **').css("color", "red");
            $("input[name='city']").focus();
            return false;
        }

        // Validate Education Details
        if (educationDetails === "") {
            $('#check1').html('** Please Enter Your Education Details **').css("color", "red");
            $("textarea[name='education']").focus();
            return false;
        }

        // Validate Work Experience in Years
        if (workExperienceYears === "") {
            $('#check1').html('** Please Select Work Experience in Years **').css("color", "red");
            $("select[name='experience_years']").focus();
            return false;
        }

        // Validate Work Experience in Months
        if (workExperienceMonths === "") {
            $('#check1').html('** Please Select Work Experience Months **').css("color", "red");
            $("select[name='experience_months']").focus();
            return false;
        }

        // Validate Skills
        if (keySkills === "") {
            $('#check1').html('** Please Enter Your Key Skills **').css("color", "red");
            $("textarea[name='key_skills']").focus();
            return false;
        }

        // Validate Current Salary in Lakhs
        if (currentSalaryLakhs === "") {
            $('#check1').html('** Please Select Current Salary in Lakhs **').css("color", "red");
            $("select[name='salary_lakhs']").focus();
            return false;
        }

        // Validate Current Salary in Lakhs
        if (currentSalaryThousands === "") {
            $('#check1').html('** Please Select Current Salary in Thousands **').css("color", "red");
            $("select[name='salary_thousands']").focus();
            return false;
        }

        // Validate File Attachment
        if (file) {
            var allowedExtensions = /(\.pdf|\.doc|\.docx)$/i;
            if (!allowedExtensions.exec(file.name)) {
                $('#check1').html('** Please Upload a File in PDF, DOC, or DOCX Format **').css("color",
                    "red");
                fileInput.focus();
                return false;
            } else if (file.size > 10 * 1024 * 1024) { // 10 MB limit
                $('#check1').html('** Please Upload a File Smaller than 10 MB **').css("color", "red");
                fileInput.focus();
                return false;
            }
        } else {
            $('#check1').html('** Please Upload Your Resume **').css("color", "red");
            fileInput.focus();
            return false;
        }

        // If no errors, submit the form
        $('#btn_submit').attr('disabled', true).val('Sending...');
        var formData = new FormData($('#myForm')[0]);
        $.ajax({
            url: "clicktoapply_valid.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data == 'sent') {
                    $('#btn_submit').removeAttr('disabled').val('Apply');
                    $('#check1').html(
                        '** Thank You For Applying! We Will Contact You Soon. **').css(
                        "color", "green");
                    $("#myForm")[0].reset();
                } else {
                    $('#btn_submit').removeAttr('disabled').val('Apply');
                    $('#check1').html('** Failed to Send Application, Please Try Again. **')
                        .css("color", "red");
                    // $('#btn_submit').removeAttr('disabled').val('Apply');
                    // $('#check1').html("** " + data + " **").css("color", "red");
                }
            }
        });
    });
});
</script>