<table class="table table-striped" style="font-size: 12px;">
  <thead style="background: #3ADDDD;">
    <tr>
      <th scope="col">Room</th>
      <th scope="col">bulding</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rooms as $room):?>
        <tr>
            <th scope="col"><?=$room->getName_room()?></th>
            <th scope="col"><?=$room->getName_bulding()?></th>
            <th scope="col"><a href="<?=$room->getId()?>"><i class='fa fa-trash-o delete' aria-hidden='true'></i></a></th>
            <th scope="col"><a href="<?=$room->getId()?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></th>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>