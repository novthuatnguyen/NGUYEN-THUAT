<?php
 $sinhvien = array(
                  array( 'name' => 'Thuat',
                          'age'  => '18',
                          'weight' => '62'
                        ),
                  array( 'name' => 'Linh',
                          'age'  => '17',
                          'weight' => '50'
                        ),
                  array( 'name' => 'Hoa',
                          'age'  => '18',
                          'weight' => '52'
                        ),
                  array( 'name' => 'Nhi',
                          'age'  => '17',
                          'weight' => '55'
                        ),
                  array( 'name' => 'Mai',
                          'age'  => '18',
                          'weight' => '53'
                        )
                   );
              $ketqua = array();
              if(isset($_POST['age']) && isset($_POST['weight']))
               {
                foreach ($sinhvien as $key => $sv) 
                {
                  if(($sv['age'] == ($_POST['age'])) && ($sv['weight'] == ($_POST['weight'])))
                     $ketqua[] = $sv;
                }
               }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

th 
{
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
td
{
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) 
{
  background-color: #dddddd;
}
</style>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <table>
      <form action="" method="POST">
        <select name="age">
          <option value='16'>16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
        </select>
        <select name="weight">
          <option value="50">50</option>
          <option value="52">52</option>
          <option value="53">53</option>
          <option value="55">55</option>
          <option value="57">57</option>
          <option value="62">62</option>
        </select>
        <input type="submit" name="Search">
      </form>
      <tr>
        <th> Name</th>
        <th>Age</th>
        <th>Weight</th>
      </tr>
      <?php foreach ($ketqua as $key => $value) 
      {?>
        <td> <?php echo $value['name']?> </td>
        <td> <?php echo $value['age']?> </td>
        <td> <?php echo $value['weight']?> </td>
    <?}?>
    </table>
</body>
</html>
