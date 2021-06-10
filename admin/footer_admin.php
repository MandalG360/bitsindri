        
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">&copy; Copyright <strong><span>BIT Sindri</span></strong>. All Rights Reserved</div>
                            <div>
                                Designed by <a href="#">IT Fighter</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="../assets/js/font-awesome-all.min.js"></script>
        <script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/jquery.dataTables.min.js"></script>
        <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/js/dataTables.js"></script>
        <script src="../assets/js/admin.js"></script>
        <script src="../assets/js/dissable-shortcut-key.min.js"></script>
        <!-- remove dublicate value on dropdown list -->
        <script type="text/javascript">
            $(function(){
                $('select option').each(function(){
                    $(this).siblings("[value="+this.value+"]").remove();
                });
            })
        </script>
    </body>
</html>