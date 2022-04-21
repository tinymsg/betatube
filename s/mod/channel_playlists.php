
								<div class="channel-tab-content channel-layout-two-column selected blogger-template">
									<div class="tab-content-body">
										<div class="primary-pane">
                                            <?php if($_user['featured'] != false && $__video_h->video_exists($_user['featured'])) { ?>
											<div class="channels-featured-video channel-module yt-uix-c3-module-container has-visible-edge">
												<div class="module-view featured-video-view-module">
												<div id="watch-video" >
          <script>
if (window.yt.timing) {yt.timing.tick("bf");}    </script>

          <div id="watch-player" class="flash-player"></div>
<iframe height="360" width="640" src="/player/embed?v=<?php echo htmlspecialchars($_user['featured']) ?>"></iframe>

      <!-- begin watch-video-extra -->
      <div id="watch-video-extra">
        
        
      </div>
      <!-- end watch-video-extra -->
    </div>
													<div style="width: 615px;" class="channels-featured-video-details yt-tile-visible clearfix">
														<h3 class="title">
															<a href="/watch?v=<?php echo $video['rid']; ?>">
															<?php echo htmlspecialchars($video['title']); ?>
															</a>
															<div class="view-count-and-actions">
																<div class="view-count">
																	<span class="count">
																	<?php echo $__video_h->fetch_video_views($video['rid']); ?>
																	</span>
																	views
																</div>
															</div>
														</h3>
														<p class="channels-featured-video-metadata">
															<span>by <?php echo htmlspecialchars($_user['username']); ?></span>
															<span class="created-date"><?php echo $__time_h->time_elapsed_string($video['publish']); ?></span>
														</p>
													</div>
												</div>
											</div>
                                            <?php } ?>
											<div class="playlists-wide channel-module yt-uix-c3-module-container">
                                                <div class="module-view">
	  												<?php
                                                        $stmt = $__db->prepare("SELECT * FROM playlists WHERE author = :search ORDER BY id DESC LIMIT 10");
                                                        $stmt->bindParam(":search", $_user['username']);
                                                        $stmt->execute();
													?>
													<div class="playlist-info">
														<h2><?php echo htmlspecialchars($_user['username']); ?>'s playlists</h2>
														<?php if($stmt->rowCount() == 0) { echo "<span style='font-size:11px;color:grey;'>This user has no playlists available currently.</span><br><br>"; } ?>
														<div class="yt-horizontal-rule "><span class="first"></span><span class="second"></span><span class="third"></span></div>
													</div>
                                                    <?php 
                                                        if($stmt->rowCount() != 0) {
                                                            while($playlist = $stmt->fetch(PDO::FETCH_ASSOC)) { 
                                                                $playlist['videos'] = json_decode($playlist['videos']);
                                                    ?>
                                                    <div class="playlist yt-tile-visible yt-uix-tile">
                                                        <div class="playlist-metadata">
                                                            <h3 dir="ltr">
                                                                <a class="yt-uix-tile-link" href="/view_playlist?v=<?php echo htmlspecialchars($playlist['rid']); ?>&amp;feature=plcp">
                                                                    <?php echo htmlspecialchars($playlist['title']); ?>
                                                                </a>
                                                            </h3>
                                                            <p class="description" dir="ltr">
                                                                <?php echo $__video_h->shorten_description($playlist['description'], 50); ?>
                                                            </p>
                                                        </div>
                                                        <a class="yt-uix-contextlink play-all yt-uix-sessionlink" href="/watch?v=xrxEQPBbkjY&amp;list=<?php echo htmlspecialchars($playlist['rid']); ?>&amp;feature=plcp" data-sessionlink="context=C4c6c989FDvjVQa1PpcFMwGAkvUKxABIU0JrBC2fHjB8Kf7aTaWOw%3D">
                                                        <span class="playlist-thumb-strip playlist-thumb-strip-350"><span class="videos videos-5 vertical-cutoff"><span class="clip"><span class="centering-offset"><span class="centering"><span class="ie7-vertical-align-hack">&nbsp;</span><img src="/dynamic/thumbs/default.jpg" alt="" class="thumb"></span></span></span><span class="clip"><span class="centering-offset"><span class="centering"><span class="ie7-vertical-align-hack">&nbsp;</span><img src="/dynamic/thumbs/default.jpg" alt="" class="thumb"></span></span></span><span class="clip"><span class="centering-offset"><span class="centering"><span class="ie7-vertical-align-hack">&nbsp;</span><img src="/dynamic/thumbs/default.jpg" alt="" class="thumb"></span></span></span><span class="clip"><span class="centering-offset"><span class="centering"><span class="ie7-vertical-align-hack">&nbsp;</span><img src="/dynamic/thumbs/default.jpg" alt="" class="thumb"></span></span></span><span class="clip"><span class="centering-offset"><span class="centering"><span class="ie7-vertical-align-hack">&nbsp;</span><img src="//i2.ytimg.com/vi/qPThma_6X7Y/default.jpg" alt="" class="thumb"></span></span></span></span><span class="resting-overlay"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="play-button" alt="Play all">  <span class="video-count-box">
                                                        <?php echo count($playlist['videos']); ?> videos
                                                        </span>
                                                        </span><span class="hover-overlay"><span class="play-all-container"><strong><img src="//s.ytimg.com/yt/img/ui/playlist_thumb_strip/mini-play-all-vflZu1SBs.png" alt="">Play all</strong></span></span></span>
                                                        </a>
                                                    </div>
                                                    <?php } } ?>
                                                </div>
                                            </div>
										</div>
										<div class="secondary-pane"><?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/secondary_pane.php"); ?></div>
									</div>
								</div>
							