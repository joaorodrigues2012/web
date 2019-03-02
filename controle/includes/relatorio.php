		<?php if($rows >= 1)
			{							
				echo "
						<table cellspacing='3px'>	
							<tbody>							
						";				
							echo "
									<tr>
										<td class='td' style='font-weight:bold;'>Produto</td>	
										<td class='td' style='font-weight:bold;'>Quantidade</td>							
									</tr>
						  			";									
						while($query = mysql_fetch_array($sql))
						{							
							echo "
									<tr>
										<td class='td'>".$query['produto']."</td>
										<td class='preco'>".$query['QTDE']."</td>
									</tr>
							  		";						
						}	
				echo "
							</tbody>
						</table>
					  ";
			}