
<html>
    <center><h1>REGISTRATION FORM</h1></center>
        <script language = "Javascript">
          function checkEmail() {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.email.value)){
            return true;
            }
            return false; 
          }
          function checkName(str){
              var re = /[^a-zA-Z]/g
              if (re.test(str)) return false;
              return true;
            }
            function checkAddress(str){
              var re = /[^[a-z][A-Z][0-9]]/g
              if(re.test(str)) return false;
              return true;
            }
          function validate(){
            var emailID=document.form.email;
              var name=document.form.name;
                var add=document.form.address;

            if((name.value==null)||(name.value=="")){
            alert("Please Enter your Name!")
            name.focus();
            return false
            }
            if(checkName(name.value)==false){
            name.value=""
            alert("Invalid Name!");
            name.focus()
            return false
            }
            if((emailid.value==null)||(emailid.value=="")){
            alert("Please Enter your Email ID!")
            emailid.focus()
            return false
            }
            if (checkEmail(emailid.value)==false){
            emailid.value=""
            alert("Invalid Email Adderess!");
            emailid.focus()
            return false
            }
                       
            if(document.form.col.selectedIndex==""){
            alert ( "Please select your college" );
     		return false;  
    		}
            return true
          }
        </script>
        <form name="form" method="post" onSubmit="return validate()">
        <pre>
        Enter Name:              <input type="text" name="name" size="30"><br>
        Enter an Email Address : <input type="text" name="email" size="30"><br>
       <table colspan> 
        Select college:    	 <select name="col">

<option value="NCRD's Sterling Institute of Management Studies, Navi Mumbai">NCRD's Sterling Institute of Management Studies, Navi Mumbai</option>

<option value="Veermata Jijabai Technological Institute(VJTI), Matunga, Mumbai">Veermata Jijabai Technological Institute(VJTI), Matunga, Mumbai</option>

<option value="Manjara Charitable Trust's Rajiv Gandhi Institute of Technology, Mumbai">Manjara Charitable Trust's Rajiv Gandhi Institute of Technology, Mumbai</option>

<option value="Mumbai Education Trust's Institute of Computer Science, Bandra (W), Mumbai">Mumbai Education Trust's Institute of Computer Science, Bandra (W), Mumbai</option>

<option value="Audyogik Shikshan Mandal’s Institute Of Management & Computer Studies ( IMCOST), Thane">Audyogik Shikshan Mandal’s Institute Of Management & Computer Studies ( IMCOST), Thane</option> 

<option value="Vivekanand Education Society's Institute of Technology, Chembur, Mumbai">Vivekanand Education Society's Institute of Technology, Chembur, Mumbai</option>

<option value="S.I.E.S. College of Management Studies Nerul, Navi Mumbai">S.I.E.S. College of Management Studies Sri Chandrasekarendra Saraswathy Vidyapuram, Nerul, Navi Mumbai</option>

<option value="Late Bhausaheb Hiray S. S. Trust?s Institute of Computer Application,Bandra (East), Mumbai">Late Bhausaheb Hiray S. S. Trust?s Institute of Computer Application,Bandra (East), Mumbai</option>

<option value="Bharati Vidyapeeth?s Institute of Management & Information Technology,Belapur,Navi Mumbai">Bharati Vidyapeeth?s Institute of Management & Information Technology,C.B.D. Belapur,Navi Mumbai</option>

<option value="Navyug Vidyapeeth Trust?s College of Master of Computer Application Ladvali, Tal. Mahad,Dist. Raigad">Navyug Vidyapeeth Trust?s College of Master of Computer Application Ladvali, Tal. Mahad,Dist. Raigad</option>

<option value="IBSAR Trust's IBSAR Institute of Management Studies, Karjat, Raigad">IBSAR Trust's IBSAR Institute of Management Studies, Karjat, Raigad</option>

<option value="Dr. G D Pol Foundation YMT College of Management, Navi Mumbai">Dr. G D Pol Foundation YMT College of Management, Navi Mumbai</option>

<option value="Saraswati Education Society's Yadavrao Tasgaonkar School of business Management, KarjatSaraswati Education Society's Yadavrao Tasgaonkar School of business Management, Karjat"></option>

<option value="Jawahar Education Society's Annasaheb Chudaman Patil College of Engineering,Kharghar">Jawahar Education Society's Annasaheb Chudaman Patil College of Engineering,Kharghar</option>

<option value="Saraswati Education Society, Yadavrao Tasgaonkar Institute of Engineering & Technology, Karjat">Saraswati Education Society, Yadavrao Tasgaonkar Institute of Engineering & Technology, Karjat</option>

<option value="Deccan Education Society's Navinchandra Mehta Institute of Technology & Development, Dadar, Mumbai">Deccan Education Society's Navinchandra Mehta Institute of Technology & Development, Dadar, Mumbai</option>

<option value="Bhartiya Vidya Bhavan's Sardar Patel Institute of Technology , Andheri, Mumbai">Bhartiya Vidya Bhavan's Sardar Patel Institute of Technology , Andheri, Mumbai</option>

<option value="S.N.D.T Women's University P.G.D. of Computer Science, Mumbai">S.N.D.T Women's University P.G.D. of Computer Science, Mumbai</option>

<option value="K. J. Somaiya Institute of Management Studies & Research, Mumbai">K. J. Somaiya Institute of Management Studies & Research, Mumbai</option>

<option value="Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumba">Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumba</option>


</select><br>

tick the event in which your are intrested....

<table border="1">
<tr><th colspan="12"><center>it events</center></th></tr>
<tr>
<td><Input type=checkbox name=it_event value="c">C - Programming<br></td>

<td><Input type=checkbox name=it_event value="wd">Web designing<br></td>

<td><Input type=checkbox name=it_event value="avm">A V mixing<br></td>

<td><Input type=checkbox name=it_event value="bt">Blind typing<br></td>

<td><Input type=checkbox name=it_event value="photo">Photoshop<br></td>

<td><Input type=checkbox name=it_event value="rm">Ringtone making<br></td>

<td><Input type=checkbox name=it_event value="tc">Tech crossword<br></td>

<td><Input type=checkbox name=it_event value="tq">Tech quiz<br></td>

<td><Input type=checkbox name=it_event value="pa">PC assembling<br></td>

<td><Input type=checkbox name=it_event value="sql">SQL<br></td>

<td><Input type=checkbox name=it_event value="ts">Tech shayari<br></td>

<td><Input type=checkbox name=it_event value="kfb">Know – ur - facebook<br></td>

</tr>

</table>
<center>
<table border="1" >

<tr><th colspan="12">NON – TECHNICAL EVENTS:</th></tr>

<tr>

<td><Input type=checkbox name=non_it_event value="ci">Click it<br></td>


<td><Input type=checkbox name=non_it_event value="kbc">KBC<br></td>


<td><Input type=checkbox name=non_it_event value="td">tdeasure hunt<br></td>


<td><Input type=checkbox name=non_it_event value="lang">LAN gaming<br></td>


<td><Input type=checkbox name=non_it_event value="rf">ROBO foot-ball<br></td>


<td><Input type=checkbox name=non_it_event value="bt">Build your tdack<br></td>


<td><Input type=checkbox name=non_it_event value="am">AD-MAD<br></td>

</tr>

</table>
</center>
<center>
<table border="1">
<tr>

<th colspan="6">sports<th>

</tr>

<td><Input type=checkbox name=sport_event value="rf"> Rink foot-ball<br></td>


<td><Input type=checkbox name=sport_event value="cric">Cricket<br></td>


<td><Input type=checkbox name=sport_event value="tt">Table-tennis<br></td>


<td><Input type=checkbox name=sport_event value="c">Carrom<br></td>


<td><Input type=checkbox name=sport_event value="ch">Chess<br></td>

</tr>

</table>
</center>
       <center> <input type="submit" name="Submit" value="Submit"></center>
        </pre>
        </form>
</html>.
http://www.templatemo.com/templates/templatemo_294_wall_shelf/