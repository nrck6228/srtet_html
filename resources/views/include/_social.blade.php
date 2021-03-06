<div class="social--wrapper">
    <div class="row justify-content-between align-items-md-center">
        <div class="col-auto">
            <div class="view--date">
                วันที่อัพเดท : <span>7 เมษายน 2565</span>
            </div>
        </div>
        <div class="col-auto">
            <div class="social__right">
                <div class="view--count">
                    จำนวนผู้เข้าชม : <span>39068</span> คน
                </div>

                <div class="social--block">
                    <span>แชร์ :</span>
                    <a href="javascript:void(0)" class="social__icon">
                        <img src="{{ asset('assets/images/icon/facebook.svg')}}" alt="Facebook">
                    </a>
                    <a href="javascript:void(0)" class="social__icon">
                        <img src="{{ asset('assets/images/icon/twitter.svg')}}" alt="Twitter">
                    </a>
                    <a href="javascript:void(0)" class="social__icon">
                        <img src="{{ asset('assets/images/icon/icon-line.svg')}}" alt="Line">
                    </a>
                    <a href="javascript:void(0)" class="social__icon" id="btnCopy">
                        <img src="{{ asset('assets/images/icon/icon-link.svg')}}" alt="Copy Link">
                        <span class="copiedtext" aria-hidden="true">Copied</span>
                    </a>
                    <a href="javascript:void(0)" class="social__icon">
                        <img src="{{ asset('assets/images/icon/icon-print.svg')}}" alt="Print">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var btnCopy = document.getElementById('btnCopy');
        btnCopy.addEventListener('click', function(){
            if (document.execCommand('copy')){
                btnCopy.classList.add('copied');
                
                var temp = setInterval(function(){
                    btnCopy.classList.remove('copied');
                    clearInterval(temp);
                }, 600 );
                
            } else {
                console.info( 'document.execCommand went wrong…' )
            }
            return false;
        });
</script>