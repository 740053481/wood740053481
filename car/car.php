<?php
	$mysqli=new mysqli('localhost','root','','apple');
	$sql="select * from tb_shop";
	$mysqli->query("SET NAMES UTF8");
	$result=$mysqli->query($sql);
		
?>


		<tr>
			<th>商品名称</th>
			<th>商品价格</th>
			<th>购买数量</th>
		</tr>
	<?php	
		 while ($row=mysqli_fetch_array($result)) {
                   ?>     
						
                        <tr>
                            <td><?php echo $row['shop_name']; ?></td>
                            <td><?php echo $row['shop_price']; ?></td>
							<td><?php echo $row['shop_number']; ?></td>
                        </tr>
						<?php
						}
						?>