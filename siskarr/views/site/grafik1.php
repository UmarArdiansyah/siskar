<?=
\dosamigos\highcharts\HighCharts::widget([
   'clientOptions' => [
      'chart' => [
         'type' => 'bar'
      ],
      'title' => [
         'text' => 'Nama Buah'
      ],
      'xAxis' => [
         'categories' => [
            'Apel',
            'Pisang',
            'Jeruk'
         ]
      ],
      'yAxis' => [
         'title' => [
             'text' => 'Buah yang dimakan'
         ]
      ],
      'series' => [
         ['name' => 'Rohman', 'data' => [1, 6, 4]],
         ['name' => 'Rohim', 'data' => [5, 7, 3]]
      ]
   ]
]);
?>