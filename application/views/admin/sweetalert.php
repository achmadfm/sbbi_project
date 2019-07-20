
    <?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                swal("Whoops!","Something Wrong please try again","error")
        </script>
    <?php elseif($this->session->flashdata('msg')=='error2'):?>
        <script type="text/javascript">
                swal("Whoops!","Sorry you must upload the photo","error")
        </script>
    <?php elseif($this->session->flashdata('msg')=='error22'):?>
        <script type="text/javascript">
                swal("Hooray!!","Looks like you don't upload the photo","error")
        </script>
    <?php elseif($this->session->flashdata('msg')=='error3'):?>
        <script type="text/javascript">
                swal("Hooray!!","Looks like your photos can't upload cause type or file too big","error")
        </script>
    <?php elseif($this->session->flashdata('msg')=='successs'):?>
        <script type="text/javascript">
                swal("Hooray!!","Bosowa Bina Insani Bogor History successful Updated","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='successab'):?>
        <script type="text/javascript">
                swal("Hooray!!","Sekolah Alam Bosowa History successful Updated","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                swal("Hooray!!","About School successful Updated","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success2'):?>
        <script type="text/javascript">
                swal("Hooray!!","School Facility successful added","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success3'):?>
        <script type="text/javascript">
                swal("Hooray!!","School Program successful added","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success4'):?>
        <script type="text/javascript">
                swal("Hooray!!","Testimoni successful added","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='successslider'):?>
        <script type="text/javascript">
                swal("Hooray!!","Sliders successful added","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                swal("Hooray!!","Speech successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='info1'):?>
        <script type="text/javascript">
                swal("Hooray!!","Facility successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='info2'):?>
        <script type="text/javascript">
                swal("Hooray!!","Speech successful updated, but picture not uploaded","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='info3'):?>
        <script type="text/javascript">
                swal("Hooray!!","Facility successful updated, but picture not updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='info4'):?>
        <script type="text/javascript">
                swal("Hooray!!","Program successful updated, but picture not updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='info5'):?>
        <script type="text/javascript">
                swal("Hooray!!","Program successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='info6'):?>
        <script type="text/javascript">
                swal("Hooray!!","Testimoni successful updated","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='info7'):?>
        <script type="text/javascript">
                swal("Hooray!!","Testimoni successful updated without photos","info")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                swal("Hooray!!","Facility successful deleted","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus2'):?>
        <script type="text/javascript">
                swal("Hooray!!","Program successful deleted","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus3'):?>
        <script type="text/javascript">
                swal("Hooray!!","Testimoni successful deleted","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus4'):?>
        <script type="text/javascript">
                swal("Hooray!!","Slider successful deleted","success")
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus5'):?>
    <script type="text/javascript">
            swal("Hooray!!","Message successful deleted","success")
    </script>
      <?php else:?>
      <?php endif;?>
