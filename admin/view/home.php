
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Left Sidebar End -->
    <div class="main-content ">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Dashboard</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#" class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-900 md:ml-2 dark:text-gray-100 dark:hover:text-white">Dashboard</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid flex-end grid-cols-1 md:grid-cols-1 xl:grid-cols-1 gap-10 my-10 text-end">
                    <form action="" method="post">
                        <input type="date" class="form-control" name="startTime">
                        <input type="date" class="form-control" name="endTime">
                        <button class="btn btn-primary" type="submit">Lọc</button>
                    </form>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
                    <div>
                        <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100 text-center mb-10">Thống kê theo doanh thu</h5>
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="grid justify-center items-center h-full">
                                <canvas id="myChart" width="400" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100  text-center my-2">Thống kê đơn hàng</h5>
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="grid justify-center items-center h-full">
                                <canvas id="ordersChart" width="400" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100  text-center my-2">Thống kê sản phẩm bán chạy</h5>
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="grid justify-center items-center h-full">
                                <canvas id="bestsellingChart" width="400" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($labels); ?>,
                    datasets: [{
                        label: 'Doanh thu theo tháng',
                        data: <?php echo json_encode($data); ?>,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });



            var ctx1 = document.getElementById('ordersChart').getContext('2d');
            var ordersChart = new Chart(ctx1, {
                type: 'pie',
                data: {
                    labels: <?php echo json_encode($labels_orders); ?>,
                    datasets: [{
                        label: 'Số đơn hàng',
                        data: <?php echo json_encode($data_orders); ?>,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });



            var ctx2 = document.getElementById('bestsellingChart').getContext('2d');
            var bestsellingChart = new Chart(ctx2, {
                type: 'polarArea',
                data: {
                    labels: <?php echo json_encode($labels_bestselling); ?>,
                    datasets: [{
                        label: 'Số lượng bán được',
                        data: <?php echo json_encode($data_bestselling); ?>,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>