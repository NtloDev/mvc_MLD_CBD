<table class="table table-striped" style="font-size: 12px;">
  <thead style="background: #3ADDDD;">
    <tr>
      <th scope="col">Matricule</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Mail</th>
      <th scope="col">Phone</th>
      <th scope="col">Birthday</th>
      <th scope="col">Adress</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($students as $student):?>
        <tr>
            <th scope="col"><?=$student->getMatricule()?></th>
            <th scope="col"><?=$student->getFirstname()?></th>
            <th scope="col"><?=$student->getLastname()?></th>
            <th scope="col"><?=$student->getMail()?></th>
            <th scope="col"><?=$student->getPhone()?></th>
            <th scope="col"><?=$student->getBirthday()?></th>
            <th scope="col"><?=$student->getAdress()?></th>
            <th scope="col"><?=$student->getAmount()?></th>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>