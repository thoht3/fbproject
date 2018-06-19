
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <link href="<?=base_url()?>style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div id="top-wrapper">
        <div id="top">
            <div id="top1">
                <strong>
                    <a href="">facebook</a>
                </strong>
            </div>
            <form id="login_form" method="POST" action="login">
                <!-- <?php echo $this->session->flashdata('login_msg');?>
                <?php echo $this->session->flashdata('verify_msg');?> -->
                <table cellspacing="0">
                    <tr>
                        <td class="tdata1">
                            <label for="email">Email or Phone</label>
                        </td>
                        <td class="tdata1">
                            <label for="pass">Password</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdata2">
                            <input type="email" name="username" tabindex="1">
                        </td>
                        <td class="tdata2">
                            <input type="password" name="password1" tabindex="2">
                        </td>
                        <td>
                            <input class="tdatalog" name="login" type="submit" value="Log In"  tabindex="4">
                        </td>
                    </tr>
                    <tr>
                        <td class="tdata3"></td>
                        <td class="tdata3">
                            <div>
                                <a href="">Forgotten account?</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div id="mid-wrapper">
        <div id="mid">
            <div id="mid1">
                <div id="slogan">
                    <h3>
                        <strong>Facebook helps you connect and share with the
                            <br>people in your life.</strong>
                    </h3>
                </div>
                <div id="img">
                    <img src="<?=base_url()?>facebook.png">
                </div>
            </div>
            <div id="mid2">
                <div id="mid21">
                    <h1>
                        <strong>Create an account</strong>
                    </h1>
                    <br>
                    <h5>It's free and always will be.</h5>
                </div>
                <form id="sign_form" method="post" action="registration" onsubmit="return valid()">
                <!-- <?php echo $this->session->flashdata('regis_msg');?> -->
                    <div id="mid22">
                        <div id="line1">
                            <div id="fname">
                                <input id="text1" type="text" placeholder="First name" name="fname" onfocus="focusfname()" onblur="blurfname()" onchange="changefname()">
                                <div id="popup1">
                                    <span class="popuptext1">What's your name?</span>
                                </div>
                                <div id="arrow1"></div>
                                <img src="<?=base_url()?>exclamation.jpg" id="exclam1">
                            </div>
                            <div id="sname">
                                <input id="text2" type="text" placeholder="Surname" name="sname" onfocus="focussname()" onblur="blursname()" onchange="changesname()">
                                <div id="popup2">
                                    <span class="popuptext2">What's your name?</span>
                                </div>
                                <div class="arrow2" id="arrow2"></div>
                                <img src="<?=base_url()?>exclamation.jpg" id="exclam2">
                            </div>
                        </div>
                        <div id="line2">
                            <input id="text3" type="text" placeholder="Mobile number or email adress" name="address" onfocus="focusmail()" onblur="blurmail()"
                                onchange="changemail()">
                            <div id="popup3">
                                <span class="popuptext3">You'll use this when you log in and if you ever need to reset your password.</span>
                            </div>
                            <div id="popup31">
                                <span class="popuptext31">Please enter a valid mobile number or email address.</span>
                            </div>
                            <div id="arrow3"></div>
                            <img src="<?=base_url()?>exclamation.jpg" id="exclam3">
                        </div>
                        <div id="line3">
                            <input id="text4" type="password" placeholder="New password" name="password" onfocus="focuspass()" onblur="blurpass()" onchange="changepass()">
                            <div id="popup4">
                                <span class="popuptext4">Enter a combination of at least six numbers, letters and punctuation marks (like ! and &amp;).</span>
                            </div>
                            <div class="arrow4" id="arrow4"></div>
                            <img src="<?=base_url()?>exclamation.jpg" id="exclam4">
                        </div>
                        <div class="birth">
                            <div class="btext">
                                <p>Birthday</p>
                            </div>
                            <div id="birth">
                                <span id="select1">
                                    <select aria-label="Day" name="birth_day" class="born" id="day" title="Day" onfocus="focusday()" onblur="blurday()" onchange="changeday()">
                                        <option value="">Day</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <select aria-label="Month" name="birth_month" class="born" id="month" title="Month" onfocus="focusmonth()" onblur="blurmonth()" onchange="changemonth()">
                                        <option value="">Month</option>
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jul</option>
                                        <option value="8">Aug</option>
                                        <option value="9">Sept</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>
                                    <select aria-label="Year" name="birth_year" id="year" class="born" title="Year" onfocus="focusyear()" onblur="bluryear()" onchange="changeyear()">
                                        <option value="">Year</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                    </select>
                                </span>
                                <div id="why">
                                    <a id="birthday-help" href="" title="Click for more information" role="button" aria-describedby="js_16g" tabindex="0">Why do I need to provide my date of birth?</a>
                                </div>
                                <div id="popup5">
                                    <span class="popuptext5">Select your date of birth. You can change who can see this later.</span>
                                </div>
                                <div id="arrow5"></div>
                                <img src="<?=base_url()?>exclamation.jpg" id="exclam5">
                            </div>
                        </div>
                        <div class="sex">
                            <span class="sex1" data-type="radio">
                                <span class="gen" id="gen1">
                                    <input type="radio" id="female" name="sex" value="female" onclick="clickfemale()">
                                    <label for="female" class="sexlabel">Female</label>
                                </span>
                                <span class="gen" id="gen2">
                                    <input type="radio" id="male" name="sex" value="male" onclick="clickmale()">
                                    <label for="male" class="sexlabel">Male</label>
                                </span>
                            </span>
                            <div id="popup6">
                                <span class="popuptext6">Please choose a gender. You can change who can see this later. </span>
                            </div>
                            <div id="arrow6"></div>
                            <img src="<?=base_url()?>exclamation.jpg" id="exclam6" onclick="clickimg()">
                        </div>
                        <div class="bla">
                            <p class="bla1">By clicking Sign Up, you agree to our
                                <a href="">Terms</a>,
                                <a href="">Data Policy </a>and

                                <a href="">Cookie Policy</a>. You may receive SMS from notifications from us and can opt out at any
                                time.
                            </p>
                        </div>
                        <div class="sign">
                            <button type="submit" name="submit" class="signin" id="sub" onclick="clickbutton()" >Sign Up</button>
                        </div>
                    </div>
                </form>
                
                <div class="page">
                    <a href="">Create a Page</a> for a celebrity, band or business.
                </div>
            </div>
        </div>
    </div>
    <div id="bot-wrapper">
        <div id="bot">
            <ul class="list">
                <li>English (UK)</li>
                <li>
                    <a href="">Tiếng Việt</a>
                </li>
            </ul>
            <div class="curve">

            </div>
            <div class="info">

            </div>
            <div class="end">
                <div>
                    <span> Facebook © 2018</span>
                </div>
            </div>
        </div>
    </div>
    <script>
        var y1 = 0; var y2 = 0; var y3 = 0; var y4 = 0;
        var x1 = document.forms["sign_form"]["fname"].value;
        var x2 = document.forms["sign_form"]["sname"].value;
        var x3 = document.forms["sign_form"]["address"].value;
        var x4 = document.forms["sign_form"]["password"].value;
        var a = x3.indexOf("@");
        var b = x3.lastIndexOf(".");
        var filter = /^[0-9-+]+$/;
        function valid() {
            var val = true;
            zday = document.getElementById("day").value;
            zmonth = document.getElementById("month").value;
            zyear = document.getElementById("year").value;
            x1 = document.forms["sign_form"]["fname"].value;
            x2 = document.forms["sign_form"]["sname"].value;
            x3 = document.forms["sign_form"]["address"].value;
            x4 = document.forms["sign_form"]["password"].value;
            var val1 = document.getElementById("female").checked;
            var val2 = document.getElementById("male").checked;
            filter = /^[0-9-+]+$/;
            a = x3.indexOf("@");
            b = x3.lastIndexOf(".");
            if (zday == "" || zmonth == "" || zyear == "" || x1 == "" || x2 == "" || x4 == "" || (val1 == false && val2 == false)) {
                val = false;
            }else if ((x3 == "") || ((a < 1 || b < a + 2 || b + 2 >= x3.length) && (filter.test(x3) == false))) {
                val = false;
            }
            else {
                val = true;
            }
            return val;
        }
        function clickfemale() {
                document.getElementById("exclam6").style.visibility = "hidden";
                document.getElementById("gen1").style.borderColor = "#BDBDBD";
                document.getElementById("gen2").style.borderColor = "#BDBDBD";
                document.getElementById("popup6").style.visibility = "hidden";
                document.getElementById("arrow6").style.visibility = "hidden";
        }
        function clickmale() {
                document.getElementById("exclam6").style.visibility = "hidden";
                document.getElementById("gen1").style.borderColor = "#BDBDBD";
                document.getElementById("gen2").style.borderColor = "#BDBDBD";
                document.getElementById("popup6").style.visibility = "hidden";
                document.getElementById("arrow6").style.visibility = "hidden";
        }
        function focusfname() {
            document.getElementById("exclam1").style.visibility = "hidden";
            document.getElementById("text1").style.borderColor = "#BDBDBD";
            y1 += 1;
            if ((y1 > 1) && (x1 == "")) {
                document.getElementById("popup1").style.visibility = "visible";
                document.getElementById("arrow1").style.visibility = "visible";
            }
            return y1;
        }
        function blurfname() {
            document.getElementById("popup1").style.visibility = "hidden";
            document.getElementById("arrow1").style.visibility = "hidden";
            if ((y1 >= 1) && (x1 == "")) {
                document.getElementById("exclam1").style.visibility = "visible";
                document.getElementById("text1").style.borderColor = "red";
            }
        }
        function changefname() {
            x1 = document.forms["sign_form"]["fname"].value;
            if (x1 != "") {
                document.getElementById("exclam1").style.visibility = "hidden";
                document.getElementById("text1").style.borderColor = "#BDBDBD";
                document.getElementById("popup1").style.visibility = "hidden";
                document.getElementById("arrow1").style.visibility = "hidden";
            }
        }
        function focussname() {
            document.getElementById("exclam2").style.visibility = "hidden";
            document.getElementById("text2").style.borderColor = "#BDBDBD";
            y2 += 1;
            if ((y2 > 1) && (x2 == "")) {
                document.getElementById("popup2").style.visibility = "visible";
                document.getElementById("arrow2").style.visibility = "visible";
            }
            return y2;
        }
        function blursname() {
            document.getElementById("popup2").style.visibility = "hidden";
            document.getElementById("arrow2").style.visibility = "hidden";
            if ((y2 >= 1) && (x2 == "")) {
                document.getElementById("exclam2").style.visibility = "visible";
                document.getElementById("text2").style.borderColor = "red";
            }
        }
        function changesname() {
            x2 = document.forms["sign_form"]["sname"].value;
            if (x2 != "") {
                document.getElementById("exclam2").style.visibility = "hidden";
                document.getElementById("text2").style.borderColor = "#BDBDBD";
                document.getElementById("popup2").style.visibility = "hidden";
                document.getElementById("arrow2").style.visibility = "hidden";
            }
        }
        function focusmail() {
            document.getElementById("exclam3").style.visibility = "hidden";
            document.getElementById("text3").style.borderColor = "#BDBDBD";
            filter = /^[0-9-+]+$/;
            y3 += 1;
            x3 = document.forms["sign_form"]["address"].value;
            a = x3.indexOf("@");
            b = x3.lastIndexOf(".");
            if ((y3 > 1) && (x3 == "")) {
                document.getElementById("popup3").style.visibility = "visible";
                document.getElementById("arrow3").style.visibility = "visible";
            }
            else if ((y3 > 1) && (a < 1 || b < a + 2 || b + 2 >= x3.length) && (filter.test(x3) == false)) {
                document.getElementById("popup3").style.visibility = "hidden";
                document.getElementById("arrow3").style.visibility = "visible";
                document.getElementById("popup31").style.visibility = "visible";
            }
            return y3;
        }
        function blurmail() {
            x3 = document.forms["sign_form"]["address"].value;
            document.getElementById("popup31").style.visibility = "hidden";
            document.getElementById("popup3").style.visibility = "hidden";
            document.getElementById("arrow3").style.visibility = "hidden";
            if ((x3 == "") || ((a < 1 || b < a + 2 || b + 2 >= x3.length) && (filter.test(x3) == false))) {
                document.getElementById("exclam3").style.visibility = "visible";
                document.getElementById("text3").style.borderColor = "red";
            }
        }
        function changemail() {
            x3 = document.forms["sign_form"]["address"].value;
            a = x3.indexOf("@");
            b = x3.lastIndexOf(".");
            if (x3 != "") {
                document.getElementById("exclam3").style.visibility = "hidden";
                document.getElementById("text3").style.borderColor = "#BDBDBD";
                document.getElementById("popup3").style.visibility = "hidden";
                document.getElementById("arrow3").style.visibility = "hidden";
            }
            if ((a < 1 || b < a + 2 || b + 2 >= x3.length) && (filter.test(x3) == false)) {
                document.getElementById("exclam3").style.visibility = "visible";
                document.getElementById("text3").style.borderColor = "red";
                document.getElementById("popup3").style.visibility = "hidden";
                document.getElementById("arrow3").style.visibility = "visible";
                document.getElementById("popup31").style.visibility = "visible";
            }
        }
        function focuspass() {
            y4 += 1;
            if ((y4 > 1) && (x4 == "")) {
                document.getElementById("popup4").style.visibility = "visible";
                document.getElementById("arrow4").style.visibility = "visible";
                document.getElementById("exclam4").style.visibility = "hidden";
                document.getElementById("text4").style.borderColor = "#BDBDBD";
            }
            return y4;
        }
        function blurpass() {
            document.getElementById("popup4").style.visibility = "hidden";
            document.getElementById("arrow4").style.visibility = "hidden";
            if (x4 == "") {
                document.getElementById("exclam4").style.visibility = "visible";
                document.getElementById("text4").style.borderColor = "red";
            }
        }
        function changepass() {
            x4 = document.forms["sign_form"]["password"].value;
            if (x4 != "") {
                document.getElementById("exclam4").style.visibility = "hidden";
                document.getElementById("text4").style.borderColor = "#BDBDBD";
                document.getElementById("popup4").style.visibility = "hidden";
                document.getElementById("arrow4").style.visibility = "hidden";
            }
        }
        var zday = document.getElementById("day").value;
        var zmonth = document.getElementById("month").value;
        var zyear = document.getElementById("year").value;
        var countd = 0;
        var countm = 0;
        var county = 0;
        status = false;
        function focusday() {
            zday = document.getElementById("day").value;
            zmonth = document.getElementById("month").value;
            zyear = document.getElementById("year").value;
            document.getElementById("exclam5").style.visibility = "hidden";
            document.getElementsByClassName("born")[0].style.border = "1px solid #BDC7D8";
            document.getElementsByClassName("born")[1].style.border = "1px solid #BDC7D8";
            document.getElementsByClassName("born")[2].style.border = "1px solid #BDC7D8";
            if (countd >= 1 && (zday == "" || zmonth == "" || zyear == "")) {
                document.getElementById("popup5").style.visibility = "visible";
                document.getElementById("arrow5").style.visibility = "visible";
            }
            status = true;
        }
        function blurday() {
            countd += 1;
            zday = document.getElementById("day").value;
            zmonth = document.getElementById("month").value;
            zyear = document.getElementById("year").value;
            if (document.activeElement.id == "") {
                document.getElementById("popup5").style.visibility = "hidden";
                document.getElementById("arrow5").style.visibility = "hidden";
            }
            if ((document.activeElement.id == "") && (zday == "" || zmonth == "" || zyear == "")) {
                document.getElementById("exclam5").style.visibility = "visible";
                document.getElementsByClassName("born")[0].style.border = "1px solid red";
                document.getElementsByClassName("born")[1].style.border = "1px solid red";
                document.getElementsByClassName("born")[2].style.border = "1px solid red";
            }
        }
        function focusmonth() {
            zday = document.getElementById("day").value;
            zmonth = document.getElementById("month").value;
            zyear = document.getElementById("year").value;
            document.getElementById("exclam5").style.visibility = "hidden";
            document.getElementsByClassName("born")[0].style.border = "1px solid #BDC7D8";
            document.getElementsByClassName("born")[1].style.border = "1px solid #BDC7D8";
            document.getElementsByClassName("born")[2].style.border = "1px solid #BDC7D8";
            if (countm >= 1 && (zday == "" || zmonth == "" || zyear == "")) {
                document.getElementById("popup5").style.visibility = "visible";
                document.getElementById("arrow5").style.visibility = "visible";
            }
        }
        function blurmonth() {
            countm += 1;
            zday = document.getElementById("day").value;
            zmonth = document.getElementById("month").value;
            zyear = document.getElementById("year").value;
            if (document.activeElement.id == "") {
                document.getElementById("popup5").style.visibility = "hidden";
                document.getElementById("arrow5").style.visibility = "hidden";
            }
            if ((document.activeElement.id == "") && (zday == "" || zmonth == "" || zyear == "")) {
                document.getElementById("exclam5").style.visibility = "visible";
                document.getElementsByClassName("born")[0].style.border = "1px solid red";
                document.getElementsByClassName("born")[1].style.border = "1px solid red";
                document.getElementsByClassName("born")[2].style.border = "1px solid red";
            }
        }
        function focusyear() {
            zday = document.getElementById("day").value;
            zmonth = document.getElementById("month").value;
            zyear = document.getElementById("year").value;
            document.getElementById("exclam5").style.visibility = "hidden";
            document.getElementsByClassName("born")[0].style.border = "1px solid #BDC7D8";
            document.getElementsByClassName("born")[1].style.border = "1px solid #BDC7D8";
            document.getElementsByClassName("born")[2].style.border = "1px solid #BDC7D8";
            if (county >= 1 && (zday == "" || zmonth == "" || zyear == "")) {
                document.getElementById("popup5").style.visibility = "visible";
                document.getElementById("arrow5").style.visibility = "visible";
            }
        }
        function bluryear() {
            county += 1;
            zday = document.getElementById("day").value;
            zmonth = document.getElementById("month").value;
            zyear = document.getElementById("year").value;
            if (document.activeElement.id == "") {
                document.getElementById("popup5").style.visibility = "hidden";
                document.getElementById("arrow5").style.visibility = "hidden";
            }
            if ((document.activeElement.id == "") && (zday == "" || zmonth == "" || zyear == "")) {
                document.getElementById("exclam5").style.visibility = "visible";
                document.getElementsByClassName("born")[0].style.border = "1px solid red";
                document.getElementsByClassName("born")[1].style.border = "1px solid red";
                document.getElementsByClassName("born")[2].style.border = "1px solid red";
            }
        }
        function clickimg() {
            if (((document.getElementById("male").checked) == false) && ((document.getElementById("female").checked) == false)) {
                document.getElementById("popup6").style.visibility = "visible";
                document.getElementById("arrow6").style.visibility = "visible";
            }
        }
        check = false;
        function clickbutton() {
            check = false;
            zday = document.getElementById("day").value;
            zmonth = document.getElementById("month").value;
            zyear = document.getElementById("year").value;
            x1 = document.forms["sign_form"]["fname"].value;
            x2 = document.forms["sign_form"]["sname"].value;
            x3 = document.forms["sign_form"]["address"].value;
            x4 = document.forms["sign_form"]["password"].value;
            count = y4 = y3 = y2 = y1 = 1;
            if (x1 == "" && check == false) {
                document.forms["sign_form"]["password"].focus();
                document.forms["sign_form"]["password"].blur();
                document.forms["sign_form"]["address"].focus();
                document.forms["sign_form"]["address"].blur();
                document.forms["sign_form"]["sname"].focus();
                document.forms["sign_form"]["sname"].blur();
                document.forms["sign_form"]["fname"].focus();
                check = true;
                if (zday == "" || zmonth == "" || zyear == "") {
                    document.getElementById("exclam5").style.visibility = "visible";
                    document.getElementsByClassName("born")[0].style.border = "1px solid red";
                    document.getElementsByClassName("born")[1].style.border = "1px solid red";
                    document.getElementsByClassName("born")[2].style.border = "1px solid red";
                    check = true;
                }
                if (((document.getElementById("male").checked) == false) && ((document.getElementById("female").checked) == false)) {
                    document.getElementById("exclam6").style.visibility = "visible";
                    document.getElementsByClassName("gen")[0].style.border = "1px solid red";
                    document.getElementsByClassName("gen")[1].style.border = "1px solid red";

                }
            }
            if (x2 == "" && check == false) {
                document.forms["sign_form"]["password"].focus();
                document.forms["sign_form"]["password"].blur();
                document.forms["sign_form"]["address"].focus();
                document.forms["sign_form"]["address"].blur();
                document.forms["sign_form"]["sname"].focus();
                check = true;
                if (zday == "" || zmonth == "" || zyear == "") {
                    document.getElementById("exclam5").style.visibility = "visible";
                    document.getElementsByClassName("born")[0].style.border = "1px solid red";
                    document.getElementsByClassName("born")[1].style.border = "1px solid red";
                    document.getElementsByClassName("born")[2].style.border = "1px solid red";
                    check = true;
                }
                if (((document.getElementById("male").checked) == false) && ((document.getElementById("female").checked) == false)) {
                    document.getElementById("exclam6").style.visibility = "visible";
                    document.getElementsByClassName("gen")[0].style.border = "1px solid red";
                    document.getElementsByClassName("gen")[1].style.border = "1px solid red";

                }
            }
            if (x3 == "" && check == false) {
                document.forms["sign_form"]["password"].focus();
                document.forms["sign_form"]["password"].blur();
                document.forms["sign_form"]["address"].focus();
                check = true;
                if (zday == "" || zmonth == "" || zyear == "") {
                    document.getElementById("exclam5").style.visibility = "visible";
                    document.getElementsByClassName("born")[0].style.border = "1px solid red";
                    document.getElementsByClassName("born")[1].style.border = "1px solid red";
                    document.getElementsByClassName("born")[2].style.border = "1px solid red";
                    check = true;
                }
                if (((document.getElementById("male").checked) == false) && ((document.getElementById("female").checked) == false)) {
                    document.getElementById("exclam6").style.visibility = "visible";
                    document.getElementsByClassName("gen")[0].style.border = "1px solid red";
                    document.getElementsByClassName("gen")[1].style.border = "1px solid red";

                }
            }
            if (x4 == "" && check == false) {
                document.forms["sign_form"]["password"].focus();
                check = true;
                if (zday == "" || zmonth == "" || zyear == "") {
                    document.getElementById("exclam5").style.visibility = "visible";
                    document.getElementsByClassName("born")[0].style.border = "1px solid red";
                    document.getElementsByClassName("born")[1].style.border = "1px solid red";
                    document.getElementsByClassName("born")[2].style.border = "1px solid red";
                    check = true;
                }
                if (((document.getElementById("male").checked) == false) && ((document.getElementById("female").checked) == false)) {
                    document.getElementById("exclam6").style.visibility = "visible";
                    document.getElementsByClassName("gen")[0].style.border = "1px solid red";
                    document.getElementsByClassName("gen")[1].style.border = "1px solid red";

                }
            }
            if (check == false && (zday == "" || zmonth == "" || zyear == "")) {
                document.getElementById("day").focus();
                document.getElementById("exclam5").style.visibility = "visible";
                document.getElementsByClassName("born")[0].style.border = "1px solid red";
                document.getElementsByClassName("born")[1].style.border = "1px solid red";
                document.getElementsByClassName("born")[2].style.border = "1px solid red";
                check = true;
            }
            if (check == false && (((document.getElementById("male").checked) == false) && ((document.getElementById("female").checked) == false))) {
                document.getElementById("exclam6").style.visibility = "visible";
                document.getElementsByClassName("gen")[0].style.border = "1px solid red";
                document.getElementsByClassName("gen")[1].style.border = "1px solid red";

            }
        }
    </script>
</body>

</html>