<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="/1819dw/LearnSmart/assets/js/scripts.js"></script>

<hr />

<p><?php 

if ($access_control['role'] == "Administrator")
{
    echo '<pre>';
    print_r(get_defined_vars()); 
    echo '</pre>';
}
else
{}



?>



    <div class="container">
        <footer id="footer">
            <div class="row">
            <div class="col-lg-12">

                <ul class="list-unstyled">
                <li class="float-lg-right"><a href="#top">Back to top</a></li>
                </ul>
                <p>Created by <a href="https://dancodes.online">DanCodes</a>, <a href="https://orestbrykowytch.github.io">Orest Brykowytch</a>, and Adam Whitmore</p>
                <p>Code open-sourced on <a href="https://github.com/MayorChano/LearnSmart">Github</a>.</p>
            </div>
            </div>

        </footer>
    </div>


</p>
