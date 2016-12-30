<?php foreach ($empresas as $e): 
									if ($e->estado == "A") {
										$e->estado = "Activo";
									}else{
										$e->estado = "Inactivo";
									}
								?>
								<tr>
									<td><?php echo $e->id; ?></td>
									<td><?php echo $e->nombre; ?></td>
									<td><?php echo $e->estado; ?></td>
								</tr>
								<?php endforeach ?>