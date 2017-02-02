<style type="text/css">
a {text-decoration: none;}
a:hover {color: #ffc107;}
audio {height: 2em;background-color: #757575}
button {border-spacing: 2px;}
button:hover {background-color: #039BE5;border: .5em solid  #039BE5;
	color:#FFFFFF;}
#button-submit{margin: 2em 4em;}
form {height: 130em}
#title {color: #ffc107;float: right;margin: 2.5em 7em 0em 0em;}
h2 {color:  #ffc107;background-color: #757575;margin-top:0;
	margin-bottom: 0;padding-left: 4em; padding-top:0.8em; height: 2em;}
h3 {color:#ff8f00;padding-left: 2.8em;}
h4 {margin: 2em 0em;padding-left: 10em;}
#form {height: 10em;width: 100%;}
#form img {margin: 1em 0em 0em 5em;}
input[type="checkbox"] {float: left;}
input,select {color:#757575;height: 2em;padding:0;}
label {color:#757575;}
ol {height: 6em;width: 100%;}
ol li {background-color: #039BE5;border-radius: 5px;float: left;
	height: 5em;margin: 5px;text-align: center;width: 31%;}
ol li label {color: #FFFFFF;text-align: center;}
.primary-detail {height: 3em;width: 100%;}
.primary-detail > li {float: left;list-style: none;margin: 5px;}
.parent-contact {height: 3em;width: 100%;}
.parent-contact > li {float: left;list-style: none;margin: 5px;}
.question {margin: 0em 4em;width: 66%;}
table {border-collapse: collapse;font: 1em/1.6em 'Khmer OS Siemreap';
	height: 5em;margin: 1em auto;width: 100%;}
table tr th, td {color: #795548;border: 2px solid #FFFFFF;}
table tr th:nth-child(2n) {background-color: #29b6f6;}
table tr th:nth-child(2n+1) {background-color: #cfd8dc;}
table tr td {height: 2.5em;text-align: center;}
select {border:1px solid color:#757575 ;}
textarea {height:15em;width:50em;}
video {width: 41em;}
</style>
<form>
<div id="form">
	<img src="icon/Letters-icon.png">
	<h1 id="title">ពាក្យសុំចុះចូលរៀននៅសាលារៀនអន្តរជាតិABC</h1>
</div>
<h2>ពត័មានសិស្ស</h2>
<ul class="primary-detail">
	<li>
		<label>ឈ្មោះ៖</label>
		<input type="text" name="childName" placeholder="ឈ្មោះរបស់សិស្ស" />
	</li>
	<li>
		<label>ថ្ងៃខែឆ្នាំកំណើត៖</label>
		<input type="text" name="childName" placeholder="ថ្ងៃ/ខែ/ឆ្នាំកំណើត​​"/>
	</li>
	<li>
		<label>សិស្យភេទ</label>
		<select>
			<option value="" selected>រើស​ភេទ</option>
			<option value="Female">ស្រី</option>
			<option value="Male">ប្រុស</option>
		</select>
	</li>
</ul>
<h3>ទីកន្លែងកំណើត</h3>
<table>
	<tr>
		<th>ផ្ទះលេខ</th>
		<th>ផ្លូវលេខ</th>
		<th>ភូមិ</th>
		<th>ឃុំ</th>
		<th>ស្រុក</th>
		<th>ខេត្ត/ក្រុង</th>
	</tr>
	<tr>
		<td><input type="text" name="houseNumber" placeholder="ផ្ទះលេខ" /></td>
		<td><input type="text" name="streetNumber" placeholder="ផ្លូវលេខ" /></td>
		<td><input type="text" name="villege" placeholder="ភូមិ" /></td>
		<td><input type="text" name="comminue" placeholder="ឃុំ" /></td>
		<td><input type="text" name="district" placeholder="ស្រុក" /></td>
		<td><input type="text" name="provinceOrCity" placeholder="ខេត្ត/ក្រុង" /></td>
	</tr>
</table>
<h2>ពត័មានទំនាកទំនងអាណាព្យាបាលសិស្ស</h2>
<ul class="parent-contact">
	<li>
		<label>អាណាព្យាបាល៖</label>
		<select>
			<option value="Mister" selected>លោក</option>
			<option value="Miss">លោកស្រី</option>
		</select>
		<input type="text" name="ParentName" placeholder="ឪពុករឺម្តាយ" />
	</li>
	<li>
		<label>លេខទូរស័ព្ទ៖</label>
		<input type="text" name="phone" placeholder="លេខទូរស័ព្ទ" />
	</li>
	<li>
		<label>សារអេឡិចត្រូនិច៖</label>
		<input type="email" name="emailId" placeholder="សារអេឡិចត្រូនិច" />
	</li>
</ul>
<h3>ទីកន្លែងបច្ចុប្បន្ន</h3>
<table>
	<tr>
		<th>ផ្ទះលេខ</th>
		<th>ផ្លូវលេខ</th>
		<th>ភូមិ</th>
		<th>ឃុំ</th>
		<th>ស្រុក</th>
		<th>ខេត្ត/ក្រុង</th>
	</tr>
	<tr>
		<td><input type="text" name="houseNumber" placeholder="ផ្ទះលេខ" /></td>
		<td><input type="text" name="streetNumber" placeholder="ផ្លូវលេខ" /></td>
		<td><input type="text" name="villege" placeholder="ភូមិ" /></td>
		<td><input type="text" name="comminue" placeholder="ឃុំ" />	</td>
		<td><input type="text" name="district" placeholder="ស្រុក" /></td>
		<td><input type="text" name="provinceOrCity" placeholder="ខេត្ត/ក្រុង" /></td>
	</tr>
</table>
<h3>គណនី</h3>
<ol>
	<li>
		<label>ឈ្មោះអ្នកប្រើប្រាស់៖</label><br>
		<input type="text" name="userName" placeholder="ឈ្មោះអ្នកប្រើប្រាស់" />
	</li>
	<li>
		<label>លេខសំងាត់៖</label><br>
		<input type="password" name="pwd" placeholder="លេខសំងាត់" />
	</li>
	<li>
		<label>បញ្ចូលលេខសំងាត់ម្តងទៀត៖</label><br>
		<input type="password" name="conformPwd" placeholder="លេខសំងាត់" />
	</li>
</ol>
<h4>សំនួរសំរាប់សុវត្ថិភាពគណនី</h4>
<div class="question">
	<p>​<input type="checkbox" name="guid" />តើអ្នកជាបុគ្គលិកស្ថាប័នរឺភ្នាក់ងារផ្តល់ពត័មាន?</p>
	<p>តើអ្នកបានទទួលពត័មាននេះតាមរយៈអ្វី?</p>
	<select>
		<option value="" selected>សូមរើសយក</option>
		<option value="facebook">បណ្តាញសារពត័មានសង្គម</option>
		<option value="friend">មិត្តភក្តិ</option>
		<option value="newspaper">សារពត័មាន</option>
		<option value="magazine">ទស្សនាវដ្តី</option>
		<option value="radio">វិទ្យុ</option>
		<option value="television">ទូរស័ព្ទ</option>
	</select>
	<p>តើអ្នកចូលចិត្តសំលេងនេះដែររឺទេ?</p>
	<audio src="#" controls=""></audio>
	<p>តើអ្នកធ្លាប់បានមើលវិដីអូទាក់ទាក់នឹងការអប់រំសិស្សដូចខាងក្រោមនេះដែររឺទេ?</p>
	<video src="#" href="#" controls=""></video>
	<h5>មតិយោបល់របស់អាណាព្យាបាលសិស្ស៖</h5>
	<textarea type="text" placeholder="មតិយោបល់"></textarea>
	<p>
        <input type="checkbox" name="agreement" />ខ្ញុំជាអាណាព្យាបាលយល់ស្របតាម
        <a href="#">ល័ក្ខខ័ណ្ឌនៃកម្មវិធី</a> នៃកម្មវិធីនេះ និងអះអាង ក្រៅផ្លូវការជាមួយនឹង
        <a href="#">សាលារៀនអន្តរជាតិCIA</a>
    </p>
</div>
<div id="button-submit">
	<button type="submit" href="#" >ស្នើសុំ</button>
	<button type="reset">ម្តងទៀត</button>
</div>
</form>