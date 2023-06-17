<div x-data="appFooterComponent()" x-init="init()">
    <div>
        <span style="background-color: yellow" x-text="getTime()"></span>
    </div>
</div>
@push('scripts')
    <script type="text/javascript">
        function appFooterComponent() {
            return {
                time: new Date(),
                init() {
                    setInterval(() => {
                        this.time = new Date();
                    }, 1000);
                },
                getTime() {
                    return moment(this.time).format('DD MMMM, YYYY HH:mm:ss')
                },
            }
        }
    </script>
@endpush
