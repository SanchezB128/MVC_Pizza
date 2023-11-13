<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class administratorController extends Administrator{

	function index(){
		require_once('views/all/header.php');
		require_once('views/all/nav.php');
		require_once('views/index/index.php');
		require_once('views/index/modals.php');
		require_once('views/all/footer.php');
	}

	function tbl_ingredientes(){
		?>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Precio Unidad</th>
				<th>Unidad MDD</th>
				<th>Stock</th>
				<th>Fecha Cad</th>
				<th>Cnt Ing</th>
				</tr>
			</thead>
			<tbody >		
		<?php
		foreach (parent::get_view_users()	as $data) {
		?>
		<tr>
			<td><?php echo $data->id; ?> </td>
			<td><?php echo $data->nombre; ?> </td>
			<td><?php echo $data->descripcion; ?> </td>
			<td><?php echo $data->precio; ?> </td>
			<td><?php echo $data->unidad_mdd; ?> </td>
			<td><?php echo $data->stock; ?> </td>
			<td><?php echo $data->fecha_cad; ?> </td>
			<td><?php echo $data->cnt_ing; ?> </td>

			<td>
			  <div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			    Seleccionar <span class="caret"></span></button>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="#" onclick="ModalUpdate('<?php echo $data->id; ?>','<?php echo $data->nombre; ?>','<?php echo $data->descripcion; ?>','<?php echo $data->precio; ?>','<?php echo $data->unidad_mdd; ?>','<?php echo $data->stock; ?>','<?php echo $data->fecha_cad; ?>','<?php echo $data->cnt_ing; ?>');">Actualizar</a></li>
			      <li><a href="#" onclick="deleteUser('<?php echo $data->id; ?>');">Borrar</a></li>
			    </ul>
			  </div>
			</td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	
	<?php	
    }
    
	function deleteuser(){		
			parent::set_delete_user($_REQUEST['id']);		
    }

	function registeruser(){
		$data = array(
					'id'		=> $_REQUEST['id'],
					'nombre' 		=> $_REQUEST['nombre'],
					'descripcion' => $_REQUEST['descripcion'],
					'precio'		=> $_REQUEST['precio'],
					'unidad_mdd'		=> $_REQUEST['unidad_mdd'],
					'stock'		=> $_REQUEST['stock'],
					'fecha_cad'		=> $_REQUEST['fecha_cad'],
					'cnt_ing'		=> $_REQUEST['cnt_ing']
					);		
					parent::set_register_user($data);		
    }    
    
	function updateuser(){
		$data = array(
					'id'		=> $_REQUEST['id'],
					'nombre' 		=> $_REQUEST['nombre'],
					'descripcion' => $_REQUEST['descripcion'],
					'precio'		=> $_REQUEST['precio'],
					'unidad_mdd'		=> $_REQUEST['unidad_mdd'],
					'stock'		=> $_REQUEST['stock'],
					'fecha_cad'		=> $_REQUEST['fecha_cad'],
					'cnt_ing'		=> $_REQUEST['cnt_ing']
					);		
			parent::set_update_user($data);		
	}    
    
}

