<h1>Список контактов</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Адрес</th>
        <th>Контактный телефон</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
	<?php
 
	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Adress'].'</td><td>'.$row['Phone'].'</td><td>'.$row['Email'].'</td></tr>';
	}
	
	?>
    </tbody>
  </table>
</div>