<h2>Users</h2>

<a href="<?php echo URL; ?>/laptops/input" class="btn">Input Laptops</a>

<table>
      <tr>
            <th>NO</th>
            <th>MERK</th>
            <th>HARGA</th>
            <th>RAM</th>
            <th>WARNA</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['merk']; ?></td>
                  <td><?php echo $row['harga']; ?></td>
                  <td><?php echo $row['ram']; ?></td>
                  <td><?php echo $row['warna']; ?></td>
                  <td><a href="<?php echo URL; ?>/laptops/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/laptops/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>