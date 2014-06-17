<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

                        <?php foreach ($model as $bet_array): ?>
                            <div class="prognosis">
                                <div class="head-pr" data-toggle="collapse" data-target="#demo<?php echo $bet_array->id; ?>">
                                    <span class="sport-name"><?php echo $bet_array->sport0->sports_name; ?></php></span>
                                    <span class="chemp-name"><?php echo $bet_array->chemp_name; ?></span>
                                    <span class="coeff"><?php echo $bet_array->coeff; ?></span>
                                    <div class="prognosis-level <?php echo $bet_array->classBet->class_bet; ?>"></div>

                                </div>
                                <div id="demo<?php echo $bet_array->id; ?>" class="body-pr collapse">
                                    <div class="body-top">
                                        <span><?php echo $bet_array->team1; ?></span> - <span><?php echo $bet_array->team2; ?></span>
                                        <span><?php echo $bet_array->in_bets; ?></span>
                                    </div>
                                    <div class="footer-pr">
                                        <span class="autor-pr"><?php echo $bet_array->user->nikname; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
