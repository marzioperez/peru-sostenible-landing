@props([
    'date_time' => null
])
<div>
    @if($date_time)
        <div class="count-down" x-data="timer('{{$date_time}}')" x-init="init();">
            <div>
                <h1 class="digit" x-text="time().days"></h1>
                <p class="digit-text">Días</p>
            </div>
            <div>
                <h1 class="digit" x-text="time().hours"></h1>
                <p class="digit-text">Horas</p>
            </div>
            <div>
                <h1 class="digit" x-text="time().minutes"></h1>
                <p class="digit-text">Minutos</p>
            </div>
            <div>
                <h1 class="digit" x-text="time().seconds"></h1>
                <p class="digit-text">Segundos</p>
            </div>
        </div>
    @endif
</div>
@push('scripts')
    <script type="text/javascript">
        function timer(expiry) {
            expiry = new Date(expiry).getTime();
            return {
                expiry: expiry,
                remaining:null,
                init() {
                    this.setRemaining()
                    setInterval(() => {
                        this.setRemaining();
                    }, 1000);
                },
                setRemaining() {
                    const diff = this.expiry - new Date().getTime();
                    this.remaining =  parseInt(diff / 1000);
                },
                days() {
                    return {
                        value:this.remaining / 86400,
                        remaining:this.remaining % 86400
                    };
                },
                hours() {
                    return {
                        value:this.days().remaining / 3600,
                        remaining:this.days().remaining % 3600
                    };
                },
                minutes() {
                    return {
                        value:this.hours().remaining / 60,
                        remaining:this.hours().remaining % 60
                    };
                },
                seconds() {
                    return {
                        value:this.minutes().remaining,
                    };
                },
                format(value) {
                    return ("0" + parseInt(value)).slice(-2)
                },
                time(){
                    return {
                        days:this.format(this.days().value),
                        hours:this.format(this.hours().value),
                        minutes:this.format(this.minutes().value),
                        seconds:this.format(this.seconds().value),
                    }
                },
            }
        }
    </script>
@endpush
