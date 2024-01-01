<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ajax</title>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container py-3">
        <h2>PHP dan Ajax</h2>
        <div id="contentData">

        </div>
    </div>

    <script>
        $(document).ready(function(){
            //Menjalankan fungsi load data saat web dijalankan
            loadData()

            $('#contentData').on('click', '#addButton', function(){
                $.ajax({
                    url: 'form-add.php',
                    type: 'get',
                    success: function(data){
                        $('#contentData').html(data);
                    }
                })
            });

            $('#contentData').on('click', '#editButton', function(){
                var idMahasiswa = $(this).attr('value');
                $.ajax({
                    url: 'form-edit.php',
                    type: 'get',
                    data: {
                        idMahasiswa: idMahasiswa
                    },
                    success: function(data){
                        $('#contentData').html(data);
                    }
                })
            });

            $('#contentData').on('click', '#cancelButton', function(){
                loadData();
            });

            $('#contentData').on('submit', '#formAdd', function(e){
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=save',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data){
                        alert(data);
                        loadData();
                    }
                })
            });

            $('#contentData').on('submit', '#formEdit', function(e){
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=edit',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data){
                        alert(data);
                        loadData();
                    }
                })
            });

            $('#contentData').on('click', '#deleteButton', function(){
                var idMahasiswa = $(this).attr("value");
                $.ajax({
                    url: 'service.php?action=delete',
                    type: 'post',
                    data: {
                        idMahasiswa: idMahasiswa
                    },
                    success: function(data){
                        alert(data);
                        loadData();
                    }
                })
            });
        });
        
        function loadData(){
            $.ajax({
                url: 'data-mahasiswa.php',
                type: 'get',
                success: function(data){
                    $('#contentData').html(data);
                }
            });
        }

    </script>
      <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>