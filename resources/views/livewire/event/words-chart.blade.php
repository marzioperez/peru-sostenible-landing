<div>
    <div id="container" class="h-full w-full opacity-30"></div>
</div>
@push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        am5.ready(function() {
            let root = am5.Root.new("container");
            root.setThemes([
                am5themes_Animated.new(root)
            ]);

            let series = root.container.children.push(am5wc.WordCloud.new(root, {
                categoryField: "tag",
                valueField: "weight",
                maxFontSize: am5.percent(15)
            }));

            series.labels.template.setAll({
                fontFamily: "Maple",
                fontWeight: "900",
                fill: '#FFFFFF'
            });

            setInterval(function() {
                am5.array.each(series.dataItems, function(dataItem) {
                    let value = Math.random() * 65;
                    value = value - Math.random() * value;
                    dataItem.set("value", value);
                    dataItem.set("valueWorking", value);
                })
            }, 3000)

            series.data.setAll([
                { tag: "Resiliencia", weight: 64.96 },
                { tag: "Respeto", weight: 56.07 },
                { tag: "Tolerancia", weight: 48.24 },
                { tag: "Esfuerzo", weight: 47.08 },
                { tag: "Empatía", weight: 35.35 },
                { tag: "Transparencia", weight: 33.91 },
                { tag: "Sostenibilidad", weight: 30.19 },
                { tag: "Colaboración", weight: 27.86 },
                { tag: "Preservación", weight: 27.13 },
                { tag: "Conciencia", weight: 24.31 },
                { tag: "Innovación", weight: 21.98 },
                { tag: "Equilibrio", weight: 21.01 }
            ]);
        });
    });
</script>
@endpush
