<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <!-- <style>
            table {
                  width: 100%;
                  border: 10px;
            }
            th, td {
                  border: 10px solid black;
                  padding: 8px;
                  text-align: left;
            }
            th {
                  background-color: #f2f2f2;
            }
      </style> -->
</head>
<body>
      <?php echo $this->extend('layouts/default'); ?>

      <?php echo $this->section('content'); ?>
      <table border=1>
            <thead>
                  <tr>
                        <th>Task Name</th>
                        <th>Description</th>
                        <th>Done</th>
                  </tr>
            </thead>
            <tbody>
                  <?php foreach($tasks as $task): ?>
                  <tr>
                        <td><?= $task->name; ?></td>
                        <td><?= $task->description; ?></td>
                        <td><?= $task->done; ?></td>
                  </tr>
                  <?php endforeach; ?>
            </tbody>
      </table>
      <?php echo $this->endSection(); ?>
</body>
</html>
