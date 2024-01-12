<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DigitalProjectHub.com</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- slick slider CSS library files -->
  <script type="text/javascript" src="js/cdntailwindcss.js"></script>
  <style>
    .project p {
      padding-bottom: 1.4rem;
    }

    .project h1,
    h2 {
      padding-bottom: 1rem;
    }
  </style>
</head>

<body>
  <?php include("include/header.php"); ?>
  <!--	Header end  -->

  <!-- search start  -->
  <?php include("include/search.php"); ?>
  <!-- search end -->

  <div class="sp mx-auto max-w-7xl px-2 py-0 lg:px-0">
    <div class="overflow-hidden">
      <div class="mb-9 pt-2 md:px-6 md:pt-7 lg:mb-2 lg:p-8 2xl:p-10 2xl:pt-10">
        <?php
        $pid = $_GET['pid'];
        $query = mysqli_query($con, "SELECT project.*, category.cname FROM project,category WHERE project.category_id = category.cid AND pid=$pid");
        $row = mysqli_fetch_assoc($query); ?>
        <nav class="flex mb-5" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
              <a href="#" class="ml-1 inline-flex text-sm font-medium text-gray-800 hover:underline md:ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-4 h-4 w-4">
                  <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Home
              </a>
            </li>
            <li>
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
                <a href="projects?technology=&search=" class="ml-1 text-sm font-medium text-gray-800 hover:underline md:ml-2">
                  projects
                </a>
              </div>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
                <a href="projects?technology=<?php echo $row['cname']; ?>" class="ml-1 inline-flex text-sm font-medium text-gray-800 hover:underline md:ml-2">
                  <span class="ml-1 text-sm font-medium text-gray-800 hover:underline md:ml-2">
                    <?php echo $row['cname']; ?>
                  </span>
                </a>
              </div>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
                <a href="project?pid=<?php echo $row['pid']; ?>" class="ml-1 inline-flex text-sm font-medium text-gray-800 hover:underline md:ml-2">
                  <span class="ml-1 text-sm font-medium text-gray-800 hover:underline md:ml-2">
                    <?php echo $row['title']; ?>
                  </span>
                </a>
              </div>
            </li>
          </ol>
        </nav>

        <div class="items-start justify-between lg:flex lg:space-x-8">
          <!-- <div class="mb-6 items-center justify-center overflow-hidden md:mb-8 lg:mb-0 xl:flex"> -->
          <div class="mb-6 mx-auto w-full overflow-hidden">
            <div id="default-carousel" class="relative" data-carousel="static">
              <!-- Carousel wrapper -->
              <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                  <img src="images/project/<?php echo $row['image']; ?>" decoding="async" loading="lazy" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="images/project/<?php echo $row['image_1']; ?>" decoding="async" loading="lazy" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="images/project/<?php echo $row['image_2']; ?>" decoding="async" loading="lazy" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="images/project/<?php echo $row['image_3']; ?>" decoding="async" loading="lazy" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="images/project/<?php echo $row['image_4']; ?>" decoding="async" loading="lazy" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
              </div>
              <!-- Slider indicators -->
              <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
              </div>
              <!-- Slider controls -->
              <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                  </svg>
                  <span class="hidden">Previous</span>
                </span>
              </button>
              <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  <span class="hidden">Next</span>
                </span>
              </button>
            </div>
          </div>
          <div class="flex shrink-0 flex-col lg:w-[430px] xl:w-[470px] 2xl:w-[480px]">
            <div class="pb-2">
              <button type="button" class="rounded-md bg-black px-3 py-2 mb-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                <?php echo $row['cname']; ?>
              </button>


              <h2 class="mt-2 text-2x1 font-semibold md:text-xl xl:text-2xl">
                <?php echo $row['title']; ?>
              </h2>
              <div>
                <span class="text-gray-600">Posted on <?php echo date('F jS, Y', strtotime($row['date'])); ?></span>
              </div>


              <h3 class="mt-3 text-xl font-bold leading-tight text-black sm:text-4xl lg:text-3xl"><span class="text-green-800">₹ </span><?php echo $row['price']; ?> INR</h3>
            </div>
            <div class="space-y-2.5 md:space-y-3.5 lg:pt-2 xl:pt-4">

              <div class="grid grid-cols-2 gap-2.5">

                <a href="checkout?pid=<?php echo $row['pid']; ?>" class="block relative rounded overflow-hidden">
                  <button type="submit" class="inline-flex items-center justify-center rounded-md bg-green-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                    <span class="block">Download</span>
                  </button>
                </a>

              </div>
            </div>
            <div class="pt-6 xl:pt-8">
              <h3 class="text-15px mb-3 font-semibold sm:text-base lg:mb-3.5">
                Product Details:
              </h3>
              <p class="text-sm">
                <?php echo $row['description']; ?>
              </p>
            </div>
            <div class="pt-2 xl:pt-2">
              <b class="text-15px mb-3 mt-4 font-semibold sm:text-base lg:mb-3.5">
                note:
              </b>
              <span class="text-sm">
                These Softwares are not suitable for any of the business requriements.
              </span>
            </div>
          </div>
        </div>
        <hr class="m-10">
        <div class="project">
          <?php echo $row['content']; ?>
        </div>
        <!-- project table start  -->
        <section class="mx-auto w-full max-w-7xl py-4">
          <div class="flex flex-col space-y-4 md:flex-row md:items-center md:justify-between md:space-y-0">
            <div>
              <h2 class="text-lg font-semibold">Project Details:</h2>
              <p class="mt-1 text-sm text-gray-700">
                This is a list of Project Details.
              </p>
            </div>
          </div>
          <div class="mt-6 flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="divide-y divide-gray-200 bg-white">
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Title</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700"><?php echo $row['title']; ?></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Project Category</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700"><?php echo $row['cname']; ?></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Price</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700">₹ <?php echo $row['price']; ?> INR</div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Documentation</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700">We don't take any extra charges for any project</div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Helpline</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <a href="https://www.instagram.com/rohitbhure65/" target="_blank" class="block relative rounded overflow-hidden">
                            <div class="text-sm text-gray-700"><button type="submit" class="inline-flex items-center justify-center rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                                <span class="block">Chat with Us</span>
                              </button></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Note</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700">These Softwares are not suitable for any of the business requriements.</div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Listed On</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700"><?php echo date('F jS, Y', strtotime($row['date'])); ?></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Download</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <a href="checkout?pid=<?php echo $row['pid']; ?>" class="block relative rounded overflow-hidden">
                            <div class="text-sm text-gray-700"><button type="submit" class="inline-flex items-center justify-center rounded-md bg-green-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                                <span class="block">Download</span>
                              </button></div>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- project table end  -->
      </div>
    </div>
  </div>
  </div>

  <!--	Footer   start-->
  <?php include("include/footer.php"); ?>
  <!--	Footer   start-->


  <!-- Scroll to top -->
  <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
  <!-- End Scroll To top -->
</body>
<script type="text/javascript" src="js/custom.js"></script>
<!-- slick slider JS library file -->
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load('visualization', '1', {
    packages: ['annotatedtimeline']
  });
</script>

</html>