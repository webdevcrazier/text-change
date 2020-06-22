<?php
/**
 * Client: Nathaniel Baca
 * User: Yevgeny Yuryevich
 * Created by PhpStorm.
 * Date: 12.11.2019
 * Time: 11:01
 */
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="Title" content="<?php echo $series['strSeries_title'];?>" />
    <meta name="Description" content='<?php echo $series['strSeries_description'];?>. Contribute to this experience to help others or join it to help yourself.' />
    <meta property="og:image" content="<?php echo $shareData['image'];?>" />
    <meta property="og:title" content="<?php echo $series['strSeries_title'];?>" />
    <?php if (isset($shareData['image_width'])): ?>
        <meta property="og:image:width" content="<?php echo $shareData['image_width']?>" />
        <meta property="og:image:height" content="<?php echo $shareData['image_height']?>" />
    <?php endif; ?>
    <meta property="og:description" content="<?php echo $series['strSeries_description'];?>. Contribute to this experience to help others or join it to help yourself." />

    <title><?php echo $series['strSeries_title'];?> - Join this experience to grow and share.</title>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/shared/primary/app-common.css?version=<?php echo APP_GLOBAL_ASSETS_VERSION;?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/yevgeny/home-global.css?version=<?php echo APP_GLOBAL_ASSETS_VERSION;?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/yevgeny/home-common.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/yevgeny/preview_series-global.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/SeriesOwners/SeriesOwners.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/MenuOptionsBlog/MenuOptionsBlog.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/FormField/FormField.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/FormLoop/FormLoop.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/FormLoopQuestion/FormLoopQuestion.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/FormLoopAnswerParag/FormLoopAnswerParag.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/FormLoopAnswerTable/FormLoopAnswerTable.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/AnsweredFormField/AnsweredFormField.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/SeriesStructureTree/SeriesStructureTree.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/PostEditor/PostEditor.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/SeriesPostsTree/SeriesPostsTree.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/FormsList/FormsList.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/components/ListingPost/ListingPost.css?version=<?php echo time();?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/yevgeny/preview_series-page-v2.css?version=<?php echo time();?>">

	<?php require_once _ROOTPATH_ . '/yevgeny/views/_livestream/require_head.php'; ?>

</head>

<body>
<div class="site-wrapper page page-preview-series <?php echo isset($_SESSION['client_ID']) && $_SESSION['client_ID'] !== -1 ? 'logged-in' : '';?>">
    <?php require_once _ROOTPATH_ . '/yevgeny/views/_templates/site_header.php';?>
    <div class="site-content">
        <header class="page__header">
            <section class="header__series">
                <div class="section__inner">
                    <div class="series__card">
                        <div class="card__inner">
                            <div class="inner__content">
                                <h3 class="series__title title-font"><?php echo $series['strSeries_title'];?></h3>
                                <aside class="series__category">
                                    <a href="/browse?id=<?php echo $category['category_ID'];?>"><<< <?php echo $category['strCategory_name']?></a>
                                </aside>
                                <div class="series__price-join">
                                    <div class="d-flex align-items-center">
                                        <div class="series__price mr-auto">
                                            <div class="price__value"><?php echo $series['boolSeries_charge'] === "1" ? '$' . $series['intSeries_price'] : 'free' ?></div>
                                            <?php if ($series['boolSeries_charge'] === "1" && $series['strSeries_charge_type'] === "monthly"): ?>
                                                <div class="per-month">per month</div>
                                            <?php endif; ?>
                                        </div>
                                        <button class="site-green-btn btn__join">
                                            <span>Join</span>
                                            <svg style="display: none" version="1.1" id="Layer_1"
                                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35px" height="28px"
                                                 viewBox="0.5 0 49 38" enable-background="new 0.5 0 49 38" xml:space="preserve">
                                            <title>Rectangle 4</title>
                                                <desc>Created with Sketch.</desc>
                                                <g id="Page-1" sketch:type="MSPage">
                                                    <g id="Check_1" transform="translate(115.000000, 102.000000)" sketch:type="MSLayerGroup">
                                                        <path id="Rectangle-4" sketch:type="MSShapeGroup" fill="#FFFFFF" d="M-99.8-72.6l28.3-28.3c1.4-1.4,3.6-1.4,4.9,0
                                                    c1.4,1.4,1.4,3.6,0,4.9l-31.2,31.1c-0.6,0.6-1.4,0.9-2.1,0.9c-0.8,0-1.5-0.3-2.1-0.9l-11.6-11.6c-1.4-1.4-1.4-3.6,0-4.9
                                                    c1.4-1.4,3.6-1.4,4.9,0L-99.8-72.6z"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="series__image flex-centering">
                        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <mask id="series__image__mask" maskContentUnits="objectBoundingBox">
                                <rect fill="white" x="0" y="0" width="100%" height="100%" />
                                <circle cx=".5" cy=".5" r=".45"></circle>
                            </mask>
                            <defs>
                                <linearGradient id="series__image__grad" x1="0%" y1="100%" x2="100%" y2="0%">
                                    <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:.3" />
                                    <stop offset="100%" style="stop-color:rgb(255,255,255);stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50" fill="url(#series__image__grad)"
                                    mask="url(#series__image__mask)"/>
                        </svg>
<!---
----------------------
----------------------
----------------------

SECTION TO EDIT FOR THE SERIES IMAGE
--->                        
<?php 
                        $seriesImage = $series['strSeries_image'];
                        if ($seriesImage){?>
                            <img src="<?php echo $seriesImage?>" alt="" />
                            
                        <?php } else { ?>

                            <svg xmlns="http://www.w3.org/2000/svg" width="606.574" height="606.574" viewBox="0 0 606.574 606.574">
                                <g id="Layer_1" data-name="Layer 1" transform="translate(-490.678 60.525)">
                                    <g id="Group_1" data-name="Group 1">
                                    <circle id="Ellipse_1" data-name="Ellipse 1" cx="214.456" cy="214.456" r="214.456" transform="translate(490.678 242.762) rotate(-45)" fill="#003b4f"/>
                                    <path id="Path_1" data-name="Path 1" d="M711.524,242.858,736.1,185.535q29.206-11.7,58.431-23.366,28.926,12.375,57.836,24.793,11.673,29.22,23.367,58.431-12.683,29.556-25.349,59.119-28.945,11.025-57.884,22.081-28.908-12.409-57.828-24.79Q722.978,272.59,711.3,243.372l.219-.514Zm26.629-55.22L714.245,243.41l22.529,56.337,55.78,23.912,55.787-21.28,24.45-57.025-22.529-56.337-55.771-23.908Z" fill="#fff" fill-rule="evenodd"/>
                                    <path id="Path_2" data-name="Path 2" d="M703.445,367.732l43.78-22.8-51.257-31.111,7.477,53.91Zm45.127-21.659,24.84,42.85-68.444-20.142,43.6-22.708Zm61.622-1.788,87.311-41.479-47.792,1.444-39.519,40.035Zm90.926-41.39,36.17,47.245-124.1-5.47,87.935-41.775Zm-37.238,72.591-53.786-29.1-33.057,42.773,86.843-13.673Zm-50.5-29.176,53.08,28.718,68.2-23.373L813.382,346.31Zm87.592-142.542,67.174-.208L935.184,134.6l-34.21,69.168Zm67.292,1.42-66.944.207,45.284,58.129,21.66-58.336Zm2-.77L966.286,299.2l-26.932,52.576c-9.585,6.139-109.37,70.206-109.612,70.207l-70.946.293q-51.611-28.453-103.2-56.953l-37.464-76.029-1.11-86.107,17.132-44.624,63.03-67.7,100.97-27.637,85.826,23.353,51.873,45.655,34.407,72.187Zm-5.475,91.614-17.033-30.925,20.654-55.627-3.621,86.552Zm-.655,2.193-17.517-31.8-42.8,34.529,60.32-2.724ZM788.387,135.461l6.721,27.2,76.7-17.84-83.422-9.362Zm.638-1.57,81.734,9.178L830.038,90.278l-41.013,43.613Zm44.325,283.84,33.521-41.119,66.894-23.042L833.35,417.731Zm-6.91,2.633-50.964-28.956-15.127,29.229,66.091-.273Zm-48.872-29.64,86.845-13.674L829.3,420.117l-51.736-29.393Zm-3.6.06L705.87,370.745l52.907,49.382,15.186-29.343ZM750.3,345.811l24.934,43.013,33-42.684-57.934-.329Zm-1.191-1.635-50.455-30.624,93.426,12.336,14.275,18.617-57.246-.329Zm215-44.319-61.155,2.761,35.9,46.888,25.259-49.649Zm-62.462.738-25.89-53.967,69.345,18.913L901.655,300.6Zm-28.733-157.39-40.3-52.251,99.715,41.476-59.41,10.775Zm60.824-9.377L899.7,202.674l-25.943-57.851,59.993-10.995Zm10.97,129.919-69.185-18.87,24.2-38.87,44.981,57.74ZM898.149,203.2l-25.617-57.266-20.084,41.578,45.7,15.688ZM788.522,132.047l40.372-42.932L798.747,65.567l-10.225,66.48Zm142.425-1.959L883.128,88.019l-49.258,1.69,97.077,40.379Zm-173.728-25.3L698.3,92.557l-7.152,47.182,66.067-34.95ZM701.108,91.474l58.217,12.087,36.211-37.933L701.108,91.474Zm100.729-25.56L830.367,88.2l47.622-1.634L801.837,65.914ZM786.766,132.72,796.95,66.507l-36.231,37.954,26.047,28.259ZM701.848,368.09,658.3,364.357l36.1-50,7.452,53.73Zm52.318,49.875-93.613-51.776,41.9,3.592,51.718,48.184Zm-97.239-54.488,36.677-50.8L620.08,289.507l36.847,73.97ZM620.185,287.83l72.8,22.941-31.215-47.417L620.185,287.83Zm71.28-95.507-27.986,68.528,48.23-17.932-20.244-50.6ZM662.2,259.691l28.25-69.174-54.029-29.561L662.2,259.691Zm73.057-73.777-44.283-42.726,1.293,46.083,42.99-3.357ZM691.988,141.9,737.1,185.435l48.155-49.956L691.988,141.9Zm-2.67.419-52.681,16.9,53.983,29.537-1.3-46.434Zm-52,14.968,52.052-16.7,7.054-46.534-59.106,63.229Zm-2.588,3.646L618.759,203.2l41.432,55.259L634.73,160.937ZM618.683,205.81l.971,80.444,41.174-24.234-42.145-56.21ZM759.428,105.466l-65.544,34.672,91.68-6.315-26.136-28.357Zm27.45,30.681,7.027,28.464,76.438-17.772-20.164,41.624,48.247,16.562-24.537,39.4-1.131-.308L900.091,301.1l-51.081,1.543L808.1,344.09l-15.128-19.728L695.4,311.478l-30.968-47.043L735.346,301.5l.753-1.442-72.076-37.669,49.837-18.526-21.217-52.98,44.853-3.5Z" fill="#ccc" fill-rule="evenodd"/>
                                    <path id="Path_3" data-name="Path 3" d="M748.886,350.956a5.967,5.967,0,1,0-5.967-5.968A5.979,5.979,0,0,0,748.886,350.956Z" fill="#f26d7e" fill-rule="evenodd"/>
                                    <path id="Path_4" data-name="Path 4" d="M872.579,150.061a5.967,5.967,0,1,0-5.967-5.967A5.979,5.979,0,0,0,872.579,150.061Z" fill="#f26d7e" fill-rule="evenodd"/>
                                    <path id="Path_5" data-name="Path 5" d="M901.365,307.841a5.967,5.967,0,1,0-5.967-5.967A5.979,5.979,0,0,0,901.365,307.841Z" fill="#f26d7e" fill-rule="evenodd"/>
                                    <path id="Path_6" data-name="Path 6" d="M662.026,268.226a5.967,5.967,0,1,0-5.967-5.967A5.978,5.978,0,0,0,662.026,268.226Z" fill="#f26d7e" fill-rule="evenodd"/>
                                    <path id="Path_7" data-name="Path 7" d="M702.8,374.958a5.967,5.967,0,1,0-5.967-5.968A5.98,5.98,0,0,0,702.8,374.958Z" fill="#2ed5a1" fill-rule="evenodd"/>
                                    <path id="Path_8" data-name="Path 8" d="M690.1,147.184a5.968,5.968,0,1,0-5.968-5.968A5.979,5.979,0,0,0,690.1,147.184Z" fill="#f26d7e" fill-rule="evenodd"/>
                                    <path id="Path_9" data-name="Path 9" d="M830.1,94.99a5.967,5.967,0,1,0-5.967-5.967A5.979,5.979,0,0,0,830.1,94.99Z" fill="#0084b1" fill-rule="evenodd"/>
                                    <path id="Path_10" data-name="Path 10" d="M634.582,164.991a5.967,5.967,0,1,0-5.967-5.967A5.979,5.979,0,0,0,634.582,164.991Z" fill="#0084b1" fill-rule="evenodd"/>
                                    <path id="Path_11" data-name="Path 11" d="M656.8,371.015a5.968,5.968,0,1,0-5.968-5.968A5.979,5.979,0,0,0,656.8,371.015Z" fill="#f26d7e" fill-rule="evenodd"/>
                                    <path id="Path_12" data-name="Path 12" d="M829.5,427.132a5.967,5.967,0,1,0-5.967-5.967A5.979,5.979,0,0,0,829.5,427.132Z" fill="#2ed5a1" fill-rule="evenodd"/>
                                    <path id="Path_13" data-name="Path 13" d="M935.2,138.705a5.968,5.968,0,1,0-5.968-5.967A5.979,5.979,0,0,0,935.2,138.705Z" fill="#0084b1" fill-rule="evenodd"/>
                                    <path id="Path_14" data-name="Path 14" d="M697.626,97.551a5.967,5.967,0,1,0-5.967-5.967A5.979,5.979,0,0,0,697.626,97.551Z" fill="#0084b1" fill-rule="evenodd"/>
                                    <path id="Path_15" data-name="Path 15" d="M618.493,294.119a5.967,5.967,0,1,0-5.967-5.968A5.979,5.979,0,0,0,618.493,294.119Z" fill="#2ed5a1" fill-rule="evenodd"/>
                                    <path id="Path_16" data-name="Path 16" d="M787.315,140.486a5.967,5.967,0,1,0-5.967-5.967A5.979,5.979,0,0,0,787.315,140.486Z" fill="#0084b1" fill-rule="evenodd"/>
                                    <circle id="Ellipse_2" data-name="Ellipse 2" cx="5.967" cy="5.967" r="5.967" transform="translate(685.508 184.184)" fill="#2ed5a1"/>
                                    <path id="Path_17" data-name="Path 17" d="M775.142,396.249a5.967,5.967,0,1,0-5.967-5.968A5.979,5.979,0,0,0,775.142,396.249Z" fill="#0084b1" fill-rule="evenodd"/>
                                    <path id="Path_18" data-name="Path 18" d="M694.926,318.2a5.967,5.967,0,1,0-5.968-5.967A5.978,5.978,0,0,0,694.926,318.2Z" fill="#0084b1" fill-rule="evenodd"/>
                                    <path id="Path_19" data-name="Path 19" d="M946.861,271.143a5.967,5.967,0,1,0-5.967-5.967A5.979,5.979,0,0,0,946.861,271.143Z" fill="#0084b1" fill-rule="evenodd"/>
                                    <path id="Path_20" data-name="Path 20" d="M899.66,210.553a5.967,5.967,0,1,0-5.967-5.968A5.979,5.979,0,0,0,899.66,210.553Z" fill="#2ed5a1" fill-rule="evenodd"/>
                                    <path id="Path_21" data-name="Path 21" d="M809.875,351.306a5.967,5.967,0,1,0-5.967-5.967A5.978,5.978,0,0,0,809.875,351.306Z" fill="#2ed5a1" fill-rule="evenodd"/>
                                    <path id="Path_22" data-name="Path 22" d="M969.437,210.338a5.967,5.967,0,1,0-5.968-5.967A5.979,5.979,0,0,0,969.437,210.338Z" fill="#f26d7e" fill-rule="evenodd"/>
                                    <circle id="Ellipse_3" data-name="Ellipse 3" cx="5.967" cy="5.967" r="5.967" transform="translate(753.04 415.489)" fill="#f26d7e"/>
                                    <path id="Path_23" data-name="Path 23" d="M759.6,110.418a5.967,5.967,0,1,0-5.967-5.967A5.979,5.979,0,0,0,759.6,110.418Z" fill="#2ed5a1" fill-rule="evenodd"/>
                                    <path id="Path_24" data-name="Path 24" d="M866.389,381.882a5.967,5.967,0,1,0-5.968-5.967A5.979,5.979,0,0,0,866.389,381.882Z" fill="#f26d7e" fill-rule="evenodd"/>
                                    <circle id="Ellipse_4" data-name="Ellipse 4" cx="5.967" cy="5.967" r="5.967" transform="translate(792.184 58.101)" fill="#f26d7e"/>
                                    <path id="Path_25" data-name="Path 25" d="M939,357a5.967,5.967,0,1,0-5.967-5.967A5.979,5.979,0,0,0,939,357Z" fill="#0084b1" fill-rule="evenodd"/>
                                    <path id="Path_26" data-name="Path 26" d="M965.479,304.947a5.967,5.967,0,1,0-5.967-5.968A5.98,5.98,0,0,0,965.479,304.947Z" fill="#2ed5a1" fill-rule="evenodd"/>
                                    <path id="Path_27" data-name="Path 27" d="M712.775,249.358a5.967,5.967,0,1,0-5.967-5.968A5.98,5.98,0,0,0,712.775,249.358Z" fill="#fff" fill-rule="evenodd"/>
                                    <path id="Path_28" data-name="Path 28" d="M874.261,251.341a5.967,5.967,0,1,0-5.967-5.968A5.979,5.979,0,0,0,874.261,251.341Z" fill="#fff" fill-rule="evenodd"/>
                                    <path id="Path_29" data-name="Path 29" d="M800.477,163.639a5.967,5.967,0,1,1-5.968-5.967A5.967,5.967,0,0,1,800.477,163.639Z" fill="#fff" fill-rule="evenodd"/>
                                    <path id="Path_30" data-name="Path 30" d="M741.345,182.367a5.967,5.967,0,1,1-8.439,0A5.968,5.968,0,0,1,741.345,182.367Z" fill="#fff" fill-rule="evenodd"/>
                                    <circle id="Ellipse_5" data-name="Ellipse 5" cx="5.967" cy="5.967" r="5.967" transform="translate(843.395 297.479)" fill="#fff"/>
                                    <path id="Path_31" data-name="Path 31" d="M798.494,325.125a5.967,5.967,0,1,1-5.967-5.967A5.968,5.968,0,0,1,798.494,325.125Z" fill="#fff" fill-rule="evenodd"/>
                                    <path id="Path_32" data-name="Path 32" d="M855.533,192.209a5.967,5.967,0,1,1,0-8.439A5.968,5.968,0,0,1,855.533,192.209Z" fill="#fff" fill-rule="evenodd"/>
                                    <circle id="Ellipse_6" data-name="Ellipse 6" cx="5.967" cy="5.967" r="5.967" transform="translate(729.756 294.808)" fill="#fff"/>
                                    <path id="Path_33" data-name="Path 33" d="M617.839,209.295a5.967,5.967,0,1,0-5.967-5.967A5.979,5.979,0,0,0,617.839,209.295Z" fill="#f26d7e" fill-rule="evenodd"/>
                                    <path id="Path_34" data-name="Path 34" d="M883.426,93.162a5.968,5.968,0,1,0-5.967-5.967A5.979,5.979,0,0,0,883.426,93.162Z" fill="#2ed5a1" fill-rule="evenodd"/>
                                    <text id="Education" transform="translate(792 252)" fill="#fff" font-size="18" font-family="Montserrat-SemiBold, Montserrat" font-weight="600">
                                        <?php
                                        $split_names = explode(" ", $category['strCategory_name']);
                                        $first_offset = -0.5 * (count($split_names) - 1);
                                        echo '<tspan text-anchor="middle" x="0" dy="' . $first_offset . 'em">' . $split_names[0] . '</tspan>';
                                        for ($i = 1; $i < count($split_names); $i ++) {
                                            echo '<tspan text-anchor="middle" x="0" dy="1em">' . $split_names[$i] . '</tspan>';
                                        }
                                        ?>
                                    </g>
                                </g>
                            </svg>


                        <?php } ?>

<!---
----------------------
----------------------
----------------------

END OF SECTION TO EDIT FOR THE SERIES IMAGE
--->
                    </div>
                </div>
            </section>
            <section class="header__author">
                <div class="section__inner">
                    <div class="d-flex align-items-center justify-content-xs-center flex-wrap-xs-wrap">
                        <div class="layout__image">
                            <a href="/user_profile?id=<?php echo $creator['id']?>" class="author__image flex-centering">
                                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="author__image__mask" maskContentUnits="objectBoundingBox">
                                        <rect fill="white" x="0" y="0" width="100%" height="100%" />
                                        <circle cx=".5" cy=".5" r=".45"></circle>
                                    </mask>
                                    <defs>
                                        <linearGradient id="author__image__grad" x1="0%" y1="100%" x2="100%" y2="0%">
                                            <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:.3" />
                                            <stop offset="100%" style="stop-color:rgb(255,255,255);stop-opacity:1" />
                                        </linearGradient>
                                    </defs>
                                    <circle cx="50" cy="50" r="50" fill="url(#author__image__grad)"
                                            mask="url(#author__image__mask)"/>
                                </svg>
<!---
----------------------
----------------------
----------------------

SECTION TO EDIT FOR THE CREATOR IMAGE
The person's name is in $creator['f_name'] and $creator['l_name'].  For this section, I just want the first and last initial centered on the image.

--->
                                <?php 
                                    $creatorImage = $creator['image'];
                                    $creatorName = $creator['f_name'];
                                    $creatorLastname = $creator['l_name'];
                                    $creatorInitials = strtoupper(substr($creatorName, 0, 1) . substr($creatorLastname, 0, 1));
                                    if ($creatorImage){?>

                                        <img src="<?php echo $creatorImage?>" alt="" />
                                    
                                    <?php } else { ?>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="436.245" height="436.245" viewBox="0 0 436.245 436.245">
                                            <g id="Layer_1" data-name="Layer 1" transform="translate(-21.878 -21.878)">
                                                <circle id="Ellipse_7" data-name="Ellipse 7" cx="218.122" cy="218.122" r="218.122" transform="translate(21.878 21.878)" fill="#003b4f"/>
                                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="12.445" cy="12.445" r="12.445" transform="matrix(0.974, -0.229, 0.229, 0.974, 269.211, 371.868)" fill="#2ed5a1"/>
                                                <path id="Path_35" data-name="Path 35" d="M230.649,22.09c0,.188.007.375.007.563a41.707,41.707,0,0,1-79.322,18.012A217.069,217.069,0,0,1,230.649,22.09Z" fill="#2ed5a1" fill-rule="evenodd"/>
                                                <circle id="Ellipse_9" data-name="Ellipse 9" cx="18.115" cy="18.115" r="18.115" transform="translate(359.37 220.914)" fill="#2ed5a1"/>
                                                <path id="Path_36" data-name="Path 36" d="M32.23,275.3a31.3,31.3,0,0,1,11.685,60.326A216.667,216.667,0,0,1,24.88,276.171,31.346,31.346,0,0,1,32.23,275.3Z" fill="#0085b2" fill-rule="evenodd"/>
                                                <path id="Path_37" data-name="Path 37" d="M152.1,422.189a23.267,23.267,0,0,1,23.268,23.268,23.535,23.535,0,0,1-.177,2.876A216.851,216.851,0,0,1,134.1,430.717,23.221,23.221,0,0,1,152.1,422.189Z" fill="#f26d7e" fill-rule="evenodd"/>
                                                <path id="Path_38" data-name="Path 38" d="M431.393,315.585a26.42,26.42,0,0,1,12.152,2.941,217.555,217.555,0,0,1-25.019,46.81,26.54,26.54,0,0,1,12.867-49.751Z" fill="#0085b2" fill-rule="evenodd"/>
                                                <text id="NB" transform="translate(141.238 239.645)" fill="#fff" font-size="72" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="0" y="0"> <?php $creatorInitials?> </tspan></text>
                                                <path id="Path_39" data-name="Path 39" d="M431.576,135.636A74.9,74.9,0,0,1,323.387,38.4,218.944,218.944,0,0,1,431.576,135.636Z" fill="#f26d7e" fill-rule="evenodd"/>
                                                <path id="Path_40" data-name="Path 40" d="M115.794,263.109l-46.4,25.355a41.509,41.509,0,0,1,3,27.966l192.53,56.732a20.888,20.888,0,0,1,7.936-9.517L240.2,301.238a97,97,0,0,1-124.409-38.129ZM436.231,144.673q.53,1.092,1.048,2.189.419.885.829,1.774a88.905,88.905,0,0,1-48.686,14.424q-2.274,0-4.52-.112l-3.569,49.419a26.982,26.982,0,0,1,21.142,16.594l53.81-17.35c.167,1.287.313,2.58.458,3.874L403.649,232.6a26.971,26.971,0,0,1-14.09,30.508l25.4,45.593a37.316,37.316,0,0,1,32.207-.313q-.606,1.838-1.246,3.66a33.4,33.4,0,0,0-31.449,58.864q-1.162,1.545-2.352,3.068A37.344,37.344,0,0,1,396,353.71l-91.173,24.726a21,21,0,0,1,.175,2.7,20.832,20.832,0,0,1-20.832,20.832c-.234,0-.466,0-.7-.012l-6.689,53.058c-1.309.223-2.62.444-3.937.643l6.83-54.175a20.869,20.869,0,0,1-13.511-9.862l-83.42,40.928a33.137,33.137,0,0,1,2.6,12.9,33.492,33.492,0,0,1-.475,5.631q-1.871-.488-3.726-1.008a29.722,29.722,0,0,0,.362-4.623,29.4,29.4,0,0,0-50.192-20.791,29.609,29.609,0,0,0-2.589,2.959q-1.659-.987-3.3-2a33.257,33.257,0,0,1,55.636,3.495l83.492-40.963a20.952,20.952,0,0,1-.763-11.337L71.31,320.1a41.457,41.457,0,0,1-22.762,24.481q-.362-.661-.719-1.326-.784-1.457-1.545-2.928a36.551,36.551,0,0,0-22.208-69.365l-.011-.075-.135-.968-.01-.075q-.25-1.818-.47-3.647l0-.014a41.392,41.392,0,0,1,44.108,18.922l46.337-25.321a97,97,0,0,1,5.681-101.841L61.019,115.32q1.095-1.567,2.215-3.115l58.593,42.654a96.809,96.809,0,0,1,70.658-38.129l-1.9-39.5q-.811.024-1.628.024a54.432,54.432,0,0,1-38.608-15.993,54.726,54.726,0,0,1-10.638-15l0,0q1.09-.566,2.189-1.118,1.044-.527,2.1-1.042a49.919,49.919,0,0,0,9.743,13.767,49.8,49.8,0,0,0,85.015-35.215c0-.223,0-.519,0-.759.417,0,.832-.016,1.249-.016,1.188,0,2.37.026,3.553.045,0,.233,0,.528,0,.73A54.609,54.609,0,0,1,194.4,76.985l1.9,39.56q1.368-.041,2.748-.041a96.779,96.779,0,0,1,77,38.053l40.23-29.524a89.407,89.407,0,0,1-6.521-91.756l.009,0,.366.124c1.406.477,2.8.973,4.2,1.478l.029.048A84.855,84.855,0,0,0,436.231,144.673Zm-159.986,217.2-32.612-62.324a97.05,97.05,0,0,0,51.1-70.445l55.885,8.013q-.067.949-.068,1.916A26.954,26.954,0,0,0,386,264.589l25.621,45.982A37.292,37.292,0,0,0,395,350l-91.015,24.684a20.853,20.853,0,0,0-27.739-12.819Zm19.941,7.255a16.995,16.995,0,1,1-12.015-4.976,16.941,16.941,0,0,1,12.015,4.976ZM295.275,225.3l55.883,8.013a26.951,26.951,0,0,1,26.328-21.224h.022l3.569-49.421a89.414,89.414,0,0,1-62.519-34.554l-40.226,29.522A96.491,96.491,0,0,1,296,213.445a97.537,97.537,0,0,1-.723,11.86Zm-32.76-75.317A89.744,89.744,0,1,1,199.058,123.7a89.462,89.462,0,0,1,63.457,26.284Zm131.3,72.711a23.094,23.094,0,1,0,6.764,16.33A23.019,23.019,0,0,0,393.816,222.7Z" fill="#fff" fill-rule="evenodd"/>
                                            </g>
                                        </svg>
                                    
                                    <?php } ?>


<!------------------
--------------------
--------------------
END OF SECTION TO EDIT FOR CREATOR IMAGE
--->
                            </a>
                        </div>
                        <div class="author__text">
                            <div class="author__name"><a href="/user_profile?id=<?php echo $creator['id']?>"><?php echo $creator['f_name'];?></a></div>
                            <div class="author__description"><?php echo $creator['about_me'] ? $creator['about_me'] : 'No Description yet';?></div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <div class="page__content">

					<!--
					added by efemer
					show list of connected live stream
					-->
						<section style="border-bottom: 1px solid grey;" class="explore__this">
							<div class="section__inner">
								<h2 class="section__header">Upcoming LiveStreams</h2>

									<?php if (!isset($schedules) || empty($schedules)) : ?>

										<div class="series__description">
										<p>No Stream Scheduled</p>
									</div>

									<?php else : ?>

										<div class="row">
											<div class="col-sm-12">

												<ul class="list-group">
													<?php foreach ($schedules as $schedule) : ?>
													<li class="list-group-item">
														<a href="/viewstream?id=<?php echo $schedule['intLiveStream_stream_ID'] ?>" style="text-align: center; cursor:pointer; color: dodgerblue; font-size: 14px; margin-bottom: 10px;">
															<?php
																	$schedule_datetime = new \Carbon\Carbon($schedule['dtLiveStream_datetime']);
																	echo $schedule_datetime->format('F d, Y') . ' at ';
																	echo $schedule_datetime->format('h:ia');
															?>
															<br>
															<span style="font-size: 18px;"><?php echo $schedule['strLiveStream_title'] ?></span>
														</a>
													</li>
													<?php endforeach; ?>
												</ul>

											</div>
										</div>

									<?php endif; ?>
							</div>
						</section>

					<!-- end upcoming live stream -->

            <section class="explore__this">
                <div class="section__inner">
                    <h2 class="section__header">Explore <?php echo $series['strSeries_title'];?><?php //echo $series['strSeries_level'];?></h2>
                    <div class="series__description">
                        <?php echo $series['strSeries_description'];?>
                    </div>
                </div>
            </section>
            <section class="series__score">
                <div class="section__inner">
                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                        <div class="score__item score__share flex-centering">
                            <div class="item__inner">
                                <div class="item__name">
                                    Shares
                                </div>
                                <div class="item__value join__count__value">
                                    <?php echo $joinCount;?>
                                </div>
                                <div class="item__icon">
                                    <svg version="1.1" id="share__present" x="0px" y="0px"
                                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M480,143.686H378.752c7.264-4.96,13.504-9.888,17.856-14.304c25.792-25.952,25.792-68.192,0-94.144
                                                    c-25.056-25.216-68.768-25.248-93.856,0c-13.856,13.92-50.688,70.592-45.6,108.448h-2.304
                                                    c5.056-37.856-31.744-94.528-45.6-108.448c-25.088-25.248-68.8-25.216-93.856,0C89.6,61.19,89.6,103.43,115.36,129.382
                                                    c4.384,4.416,10.624,9.344,17.888,14.304H32c-17.632,0-32,14.368-32,32v80c0,8.832,7.168,16,16,16h16v192
                                                    c0,17.632,14.368,32,32,32h384c17.632,0,32-14.368,32-32v-192h16c8.832,0,16-7.168,16-16v-80
                                                    C512,158.054,497.632,143.686,480,143.686z M138.08,57.798c6.496-6.528,15.104-10.112,24.256-10.112
                                                    c9.12,0,17.728,3.584,24.224,10.112c21.568,21.696,43.008,77.12,35.552,84.832c0,0-1.344,1.056-5.92,1.056
                                                    c-22.112,0-64.32-22.976-78.112-36.864C124.672,93.318,124.672,71.302,138.08,57.798z M240,463.686H64v-192h176V463.686z
                                                     M240,239.686H32v-64h184.192H240V239.686z M325.44,57.798c12.992-13.024,35.52-12.992,48.48,0
                                                    c13.408,13.504,13.408,35.52,0,49.024c-13.792,13.888-56,36.864-78.112,36.864c-4.576,0-5.92-1.024-5.952-1.056
                                                    C282.432,134.918,303.872,79.494,325.44,57.798z M448,463.686H272v-192h176V463.686z M480,239.686H272v-64h23.808H480V239.686z"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <mask id="score__share__mask" maskContentUnits="objectBoundingBox">
                                    <rect fill="white" x="0" y="0" width="100%" height="100%" />
                                    <circle cx=".5" cy=".5" r=".43"></circle>
                                </mask>
                                <defs>
                                    <linearGradient id="score__share__grad" x1="0%" y1="100%" x2="100%" y2="0%">
                                        <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:.1" />
                                        <stop offset="100%" style="stop-color:rgb(255,255,255);stop-opacity:.3" />
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50" fill="url(#score__share__grad)"
                                        mask="url(#score__share__mask)"/>
                            </svg>
                        </div>
                        <div class="score__item score__star flex-centering">
                            <div class="item__inner">
                                <div class="item__name">
                                    Favorites
                                </div>
                                <div class="item__value">
                                    <?php echo $series['favorite_count'];?>
                                </div>
                                <div class="item__icon">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                        <polygon style="fill:#fff;" points="213.333,10.441 279.249,144.017 426.667,165.436 320,269.41 345.173,416.226 213.333,346.91
                                            81.485,416.226 106.667,269.41 0,165.436 147.409,144.017 "/>
                                    </svg>
                                </div>
                            </div>
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <mask id="score__star__mask" maskContentUnits="objectBoundingBox">
                                    <rect fill="white" x="0" y="0" width="100%" height="100%" />
                                    <circle cx=".5" cy=".5" r=".44"></circle>
                                </mask>
                                <defs>
                                    <linearGradient id="score__star__grad" x1="0%" y1="100%" x2="100%" y2="0%">
                                        <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:.4" />
                                        <stop offset="100%" style="stop-color:rgb(255,255,255);stop-opacity:.4" />
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50" fill="url(#score__star__grad)"
                                        mask="url(#score__star__mask)"/>
                            </svg>
                        </div>
                        <div class="score__item score__day flex-centering">
                            <div class="item__inner">
                                <div class="item__name">
                                    Days of Success
                                </div>
                                <div class="item__value">
                                    <?php echo $postsCount;?>
                                </div>
                                <div class="item__icon">
                                    <img src="/assets/images/global-icons/2-people.png" alt="" />
                                </div>
                            </div>
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <mask id="score__day__mask" maskContentUnits="objectBoundingBox">
                                    <rect fill="white" x="0" y="0" width="100%" height="100%" />
                                    <circle cx=".5" cy=".5" r=".43"></circle>
                                </mask>
                                <defs>
                                    <linearGradient id="score__day__grad" x1="0%" y1="100%" x2="100%" y2="0%">
                                        <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:.1" />
                                        <stop offset="100%" style="stop-color:rgb(255,255,255);stop-opacity:.3" />
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50" fill="url(#score__day__grad)"
                                        mask="url(#score__day__mask)"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
            <main class="content__main">
                <div class="item sample" hidden>
                    <header class="item-header current-day-show d-xs-block">
                        <div class="flex-row vertical-center margin-between horizon-center flex-wrap-xs-wrap">
                            <div class="flex-col fix-col">
                                <div class="day-wrapper">
                                    day <span class="day-value">2</span>
                                </div>
                            </div>
                            <div class="flex-col fix-col">
                                <aside class="media-icon-wrapper">
                                    <i class="fa fa-youtube-play video-icon"></i>
                                    <i class="fa fa-volume-up audio-icon"></i>
                                    <i class="fa fa-file-text text-icon"></i>
                                </aside>
                            </div>
                            <div class="flex-col">
                                <a href="javascript:;" class="item-title" target="_blank">Why gifted students need to be taught formal writing</a>
                            </div>
                            <?php if ($permission): ?>
                                <div class="flex-col">
                                    <button class="site-green-btn edit-btn">Edit</button>
                                </div>
                            <?php endif; ?>
                            <div class="flex-col">
                                <button class="site-green-btn share-btn">Share</button>
                            </div>
                        </div>
                    </header>
                    <div class="item-body">
                        <div class="type-pay blog-type sample" hidden>
                            <?php require_once ASSETS_PATH . '/components/PayBlog/PayBlog.html';?>
                        </div>
                        <div class="type-0 blog-type sample" hidden>
                            <div class="audiogallery">
                                <div class="items">
                                    <div class="audioplayer-tobe" data-thumb="" data-bgimage="assets/images/bg.jpg" data-scrubbg="assets/waves/scrubbg.png" data-scrubprog="assets/images/meditation.png" data-videoTitle="Audio Video" data-type="normal" data-source="" data-sourceogg="sounds/adg3.ogg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="type-2 blog-type sample" hidden>
                            <div class="video-wrapper">
                                <video preload="none" controls class="video-js"></video>
                            </div>
                        </div>
                        <div class="type-8 blog-type sample" hidden>
                        </div>
                        <div class="type-menu blog-type sample" hidden>
                            <?php require_once ASSETS_PATH . '/components/MenuOptionsBlog/MenuOptionsBlog.html';?>
                        </div>
                        <div class="type-other blog-type sample" hidden></div>
                        <aside class="blog-duration current-day-show d-xs-block">
                            waiting...
                        </aside>
                    </div>
                    <div class="preview-pan other-day-show d-xs-none">
                        <header class="item-header pan-header">
                            <div class="flex-row vertical-center margin-between">
                                <div class="flex-col fix-col">
                                    <div class="day-wrapper">
                                        day <span class="day-value">2</span>
                                    </div>
                                </div>
                                <div class="flex-col fix-col mr-auto">
                                    <aside class="media-icon-wrapper">
                                        <i class="fa fa-youtube-play video-icon"></i>
                                        <i class="fa fa-volume-up audio-icon"></i>
                                        <i class="fa fa-file-text text-icon"></i>
                                    </aside>
                                </div>
                                <div class="flex-col fix-col">
                                    <button class="site-green-btn share-btn">Share</button>
                                </div>
                            </div>
                        </header>
                        <div class="img-wrapper">
                            <img class="item-img" alt="" />
                            <aside class="blog-duration">
                                waiting...
                            </aside>
                        </div>
                        <div class="item-title-wrapper">
                            <a href="javascript:;" class="item-title" target="_blank">
                                Everyday Nut-Free Desserts Recipes
                            </a>
                        </div>
                    </div>
                </div>
                <h2 class="sneak__preview">Sneak Preview</h2>
                <div class="posts-container">
                </div>
                <div class="slider-nav flex-centering arrow-left d-xs-none">
                    <img src="<?php echo BASE_URL;?>/assets/images/global-icons/home-slider-arrow-left.png" />
                </div>
                <div class="slider-nav flex-centering arrow-right d-xs-none">
                    <img src="<?php echo BASE_URL;?>/assets/images/global-icons/home-slider-arrow-right.png" />
                </div>
            </main>
            <section class="series__share-join">
                <div class="d-flex align-items-center justify-content-center">
                    <button class="site-green-btn share-btn">Share</button>
                    <div class="wrap">
                        <button class="select-post">Join</button>
                        <img src="../assets/images/check_arrow_2.svg" alt="">
                        <svg width="42px" height="42px">
                            <circle class="circle_2" stroke-position="outside" stroke-width="3" fill="none" cx="22" cy="20" r="18" stroke="#1ECD97"></circle>
                        </svg>
                    </div>
                </div>
            </section>
            <div class="quick__overview">
                <div class="section__inner" id="post__list">
                    <h2 class="section__title">Quick Overview</h2>
                    <div class="posts-container flex-row flex-wrap">
                        <article class="flex-col fix-col item sample" hidden>
                            <header class="item-header">
                                <div class="flex-row vertical-center margin-between">
                                    <div class="flex-col fix-col">
                                        <div class="media-icon-wrapper">
                                            <i class="fa fa-youtube-play video-icon"></i>
                                            <i class="fa fa-volume-up audio-icon"></i>
                                            <i class="fa fa-file-text text-icon"></i>
                                        </div>
                                    </div>
                                    <div class="flex-col">
                                        <div class="day-wrapper">
                                            <span>day</span> <span class="day-value">11</span>
                                        </div>
                                    </div>
                                    <?php if ($permission): ?>
                                        <div class="flex-col fix-col">
                                            <a class="item-action edit-action flex-centering" href="javascript:;" tabindex="0">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="540.329px" height="540.329px" viewBox="0 0 540.329 540.329" style="enable-background:new 0 0 540.329 540.329;" xml:space="preserve">
                                                                                    <g>
                                                                                        <g>
                                                                                            <polygon points="0.002,540.329 58.797,532.66 7.664,481.528 		"></polygon>
                                                                                            <polygon points="16.685,412.341 10.657,458.56 81.765,529.668 127.983,523.64 442.637,208.992 331.338,97.688 		"></polygon>
                                                                                            <path d="M451.248,5.606C447.502,1.861,442.57,0,437.57,0c-5.264,0-10.6,2.062-14.701,6.157L346.92,82.106l111.299,111.298
                                                                                                l75.949-75.949c7.992-7.986,8.236-20.698,0.557-28.378L451.248,5.606z"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </svg>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="flex-col fix-col">
                                        <button class="site-green-btn share-btn">Share</button>
                                    </div>
                                </div>
                            </header>
                            <div class="item-type-body">
                                <div class="blog-type type-0 sample" hidden>
                                </div>
                                <div class="blog-type type-2 sample" hidden>
                                    <img alt="">
                                </div>
                                <div class="blog-type type-default sample" hidden>
                                    Lorem lpsum is simply dummy text of the printing and type
                                </div>
                                <aside class="blog-duration">
                                    waiting...
                                </aside>
                            </div>
                            <div class="item-title-wrapper">
                                <a href="javascript:;" target="_blank" class="item-title">Why gifted student needs to be taught formal writing</a>
                            </div>
                        </article>
                    </div>
                    <div class="load-more-status flex-centering">
                        <span class="load-more">load more</span> <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page__footer">
            <div class="footer-inner">
                <div class="flex-row vertical-center justify-content-center justify-content-xs-center">
                    <div class="flex-col fix-col">
                        <div class="take-first-step-wrapper">
                            <h3 class="take-first-step">
                                Take the first step
                            </h3>
                            <div class="actions-container">
                                <div class="flex-row margin-between justify-content-xs-center">
                                    <div class="flex-col fix-col">
                                        <div class="wrap">
                                            <button class="select-post">Join</button>
                                            <img src="../assets/images/check_arrow_2.svg" alt="">
                                            <svg width="42px" height="42px">
                                                <circle class="circle_2" stroke-position="outside" stroke-width="3" fill="none" cx="22" cy="20" r="18" stroke="#1ECD97"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-col fix-col d-xs-none">
                                        <button class="site-green-btn share-btn">Share</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="line-decoration-wrapper d-xs-none">
                <div class="line-decoration-inner">
                    <div class="flex-row vertical-center">
                        <div class="flex-col fix-col">
                            <div class="you-are-here">you are here</div>
                        </div>
                        <div class="flex-col fb-0">
                            <div class="you-are-here-line"></div>
                        </div>
                        <div class="flex-col fix-col">
                            <div class="on-your-path">
                                on your path to
                            </div>
                        </div>
                        <div class="flex-col fb-0">
                            <div class="on-your-path-line"></div>
                        </div>
                        <div class="flex-col fix-col">
                            <div class="self-development">
                                personal growth
                            </div>
                        </div>
                        <div class="flex-col fb-0">
                            <div class="self-development-line"></div>
                        </div>
                    </div>
                </div>
            </aside>
        </footer>
    </div>
    <?php require_once _ROOTPATH_ . '/yevgeny/views/_templates/site_footer.php';?>
    <?php require ASSETS_PATH . '/components/ListingPost/ListingPost.php';?>
    <?php require ASSETS_PATH . '/components/PostEditor/PostEditor.php';?>
</div>

<div class="loading" style="display: none;">Loading&#8230;</div>

<script type="text/javascript">
  var series = <?php echo json_encode($series);?>;
  var posts = <?php echo json_encode($posts);?>;
  var stripeApi_pKey = <?php echo json_encode($stripeApi_pKey);?>;
  var alert_msg = <?php echo json_encode($alert_msg);?>;
</script>

<script src="<?php echo BASE_URL;?>/assets/shared/primary/app-common.js?version=<?php echo APP_GLOBAL_ASSETS_VERSION;?>"></script>
<script src="<?php echo BASE_URL;?>/assets/js/yevgeny/home-global.js?version=<?php echo APP_GLOBAL_ASSETS_VERSION;?>"></script>
<script src="<?php echo BASE_URL;?>/assets/js/yevgeny/home-common.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/js/yevgeny/preview_series-global.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/components/SeriesOwners/SeriesOwners.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/components/MenuOptionsBlog/MenuOptionsBlog.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/components/SeriesStructureTree/SeriesStructureTree.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/components/FormLoop/FormLoop.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/components/FormLoopQuestion/FormLoopQuestion.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/components/FormLoopAnswerParag/FormLoopAnswerParag.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/components/FormLoopAnswerTable/FormLoopAnswerTable.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/components/PostEditor/PostEditor.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/components/SeriesPostsTree/SeriesPostsTree.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/components/ListingPost/ListingPost.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/components/FormsList/FormsList.js?version=<?php echo time();?>"></script>
<script src="<?php echo BASE_URL;?>/assets/js/yevgeny/preview_series-page-v2.js?version=<?php echo time();?>"></script>

<?php require_once _ROOTPATH_ . '/yevgeny/views/_livestream/require_js.php'; ?>

<script>
	if (alert_msg) {
		swal({
			icon: "info",
			title: 'INFO!',
			text: alert_msg,
			buttons: {
				returnHome: {
					text: "OK",
					value: 'ok',
					visible: true,
					className: "",
					closeModal: true,
				}
			},
			closeOnClickOutside: false,
		});
	}
</script>

</body>
</html>
