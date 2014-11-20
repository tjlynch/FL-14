<?php require 'includes/config.php' ;?>
<?php include 'includes/header1.php' ;?>
<h1>Please contact us for more information.</h1>



<p>Please use either form to contact us </h2>
</p></br>


<form id="form1" name="form1" method="post" action="send1.2.php">
  
  <p>&nbsp;</p>
  <table width="500" cellpadding="15" cellspacing="10">
    <tbody>
      <tr>
        <th scope="row"><label for="firstname">
          <div align="right">First Name:</div>
        </label>        </th>
        <td><input type="text" name="firstname" id="firstname"></td>
      </tr>
      <tr>
        <th scope="row"><label for="lastname">
          <div align="right">Last Name:</div>
        </label>        </th>
        <td><input type="text" name="lastname" id="lastname" required></td>
      </tr>
      <tr>
        <th scope="row"><label for="email">
          <div align="right">Email:</div>
        </label>        </th>
        <td><input type="email" name="email" id="email" required></td>
      </tr>
      <tr>
        <th scope="row"><label for="comments">
          <div align="right">Comments:</div>
        </label>        </th>
        <td><textarea name="comments" id="comments"></textarea></td>
      </tr>
      <tr>
        <th scope="row"><label for="security">
          <div align="right">Security 5 + 4 =</div>
        </label></th>
        <td><input type="text" name="security" id="security" required></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td><input type="submit" name="submit" id="submit" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset">
        </td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>

<form id="form2" name="form2" method="post" action="send.php">
  <table width="600" cellspacing="10" cellpadding="15">
    <tbody>
      <tr>
        <th width="139" scope="row"><label for="firstname">
          <div align="right">First Name:</div>
        </label>        </th>
        <td width="269"><input type="text" name="firstname" id="firstname"></td>
      </tr>
      <tr>
        <th scope="row"><div align="right">Last Name: </div></th>
        <td><input type="text" name="lastname" id="lastname" required></td>
      </tr>
      <tr>
        <th scope="row"><div align="right">E-Mail: </div></th>
        <td><input type="text" name="email" id="email" required></td>
      </tr>
      <tr>
        <th scope="row"><div align="right">Check all that apply</div></th>
        <td><label>
          <input type="checkbox" name="cb[]" value="air" id="CheckboxGroup1_0">
          Air only </label>
          <br>
          <label>
            <input type="checkbox" name="cb[]" value="airhotel" id="CheckboxGroup1_1">
            Air and Hotel</label>
          <br>
          <label>
            <input type="checkbox" name="cb[]" value="cake" id="CheckboxGroup1_2">
        Air, Hotel and Ice Cream Cake Welcome Package</label></td>
      </tr>
      <tr>
        <th scope="row"><label for="textarea2">
          <div align="right">Comments:</div>
        </label>        </th>
        <td><textarea name="comments" id="textarea"></textarea></td>
      </tr>
      <tr>
        <th scope="row"><div align="right">Security 5 + 4 =</div></th>
        <td><input type="text" name="security" id="security" required></td>
      </tr>
      <tr>
        <th scope="row"><div align="justify"></div></th>
        <td><input type="submit" name="submit2" id="submit2" value="Submit">
        <input type="reset" name="reset2" id="reset2" value="Reset"></td>
      </tr>
    </tbody>
  </table>
  


</form>


<?php include 'includes/footer1.php';?>
