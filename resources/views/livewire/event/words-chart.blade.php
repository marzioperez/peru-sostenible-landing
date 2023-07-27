<div>
    <div id="container" class="h-full w-full opacity-20"></div>
</div>
@push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        anychart.onDocumentReady(function() {
            let data = [
                {"x": "Resiliencia", "value": 1090000000},
                {"x": "Respeto", "value": 981000000},
                {"x": "Tolerancia", "value": 544000000},
                {"x": "Esfuerzo", "value": 520000000},
                {"x": "Empatía", "value": 422000000},
                {"x": "Transparencia", "value": 281000000},
                {"x": "Sostenibilidad", "value": 262000000},
                {"x": "Colaboración", "value": 261000000},
                {"x": "Preservación", "value": 229000000},
                {"x": "Conciencia", "value": 229000000},
                {"x": "Innovación", "value": 150000000},
                {"x": "Equilibrio", "value": 248000000}
            ];

            let chart = anychart.tagCloud(data);
            chart.fontFamily('Maple');
            chart.fontWeight(900);
            chart.textSpacing(5);
            chart.angles([0]);

            let customColorScale = anychart.scales.linearColor();
            customColorScale.colors(["#ffffff"]);
            chart.colorScale(customColorScale);

            // display the word cloud chart
            chart.container("container");
            chart.draw();
        });
    });
</script>
@endpush
