<script type='text/javascript'>
    // Outer "Grid"
        function rowGrid(location) {
            $.ajax({    
                type: "GET",
                url: location,             
                dataType: "html",                   
                success: function(response){                    
                    $("#rowGrid").html(response);
                }
            });
        }
    // /Outer "Grid"

    // Row 1
        function row1(location) {
            $.ajax({    
                type: "GET",
                url: location,             
                dataType: "html",                   
                success: function(response){                    
                    $("#row1").html(response);
                }
            });
        }
    // /Row 1

    // Row 2
        function row2() {
            $.ajax({    
                type: "GET",
                url: "./Controller/row2.php",             
                dataType: "html",                   
                success: function(response){                    
                    $("#row2").html(response);
                }
            });
        }
    // /Row 2

    $(document).ready(function() {
        <?php if(isset($_GET["nav"])) {echo "row1('" . $_GET['nav'] . "');";} ?>
    });

    //To pass the menu id to the modal page and call modal page
    function catedit(value) {
        $.ajax({    
            type: "GET",
            url: "./Controller/category_edit.php?category_id="+value,             
            dataType: "html",                   
            success: function(response){
                $("#modalbody").html(response);
            }
        });
        $("#catedit_modal").modal("show");
    }

</script>