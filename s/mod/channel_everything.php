
								<div class="channel-tab-content channel-layout-two-column selected blogger-template">
									<div class="tab-content-body">
										<div class="primary-pane">
                                            <?php if($_user['featured'] != false && $__video_h->video_exists($_user['featured'])) { ?>
											<div class="channels-featured-video channel-module yt-uix-c3-module-container has-visible-edge">
												<div class="module-view featured-video-view-module">
												<div id="watch-video" >
												<script>
if (window.yt.timing) {yt.timing.tick("bf");}    </script>

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
											<div class="single-playlist channel-module yt-uix-c3-module-container">
												<div class="module-view single-playlist-view-module">
													<div class="blogger-playall">
                                                        <!--
                                                            <a class="yt-playall-link yt-playall-link-default " href="/watch?v=<?php echo $video['rid']; ?>&amp;list=UUIwFjwMjI0y7PDBVEO9-bkQ&amp;feature=plcp">
                                                            <img class="small-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
                                                            Play all
                                                            </a>
                                                        -->
													</div>
													<?php 
														$stmt = $__db->prepare("SELECT * FROM videos WHERE author = :username ORDER BY id DESC LIMIT 20");
														$stmt->bindParam(":username", $_user['username']);
														$stmt->execute();
													?>
													<style>
														.box-gray {
															position: relative;
															padding: 10px;
															border: 1px solid #c5c5c5;
															background-color: #f7f7f7;
															border-radius: 5px;
														}
													</style>
													<div class="playlist-info">
	  													<?php if(@$_SESSION['siteusername'] == $_user['username']) { ?>
															<div class="box-gray" style="display:none;height: 130px;" id="custom_labels" style="margin-bottom: 8px;">
																<h2>Edit custom labels</h2>
																<input type="text" id="custom_title" style="margin-bottom:3px;width: 96.6%;" placeholder="Uploaded Videos Custom Text" value="<?php echo htmlspecialchars($_user['uploaded_videos_title']); ?>" class="yt-uix-form-input-text" name="custom_uploaded_videos_title"><br>
																<input type="text" id="custom_description" style="font-size: 11px;width: 96.6%;" placeholder="Description" value="<?php echo htmlspecialchars($_user['uploaded_videos_description']); ?>" class="yt-uix-form-input-text" name="custom_uploaded_videos_description">
																<button onclick="custom_labels_finish()" class="yt-uix-button yt-uix-button-default" style="float:right;margin-top:3px;margin-bottom: 3px;">Finish</button><br>
															</div><br>
															<a href='#' style='float:right;font-size:11px;color:black;position: relative;top: 9px;' onclick=';open_custom_labels();return false;'>edit</a>
														<?php } ?>
														<h2 id="custom_label_title_change"><?php echo htmlspecialchars($_user['uploaded_videos_title']); ?></h2>
														<span class="blogger-video-count">1-10 of <?php echo $stmt->rowCount(); ?></span>
														<p id="custom_label_description_change" class="playlist-description"><?php echo htmlspecialchars($_user['uploaded_videos_description']); ?></p>
														<div class="yt-horizontal-rule "><span class="first"></span><span class="second"></span><span class="third"></span></div>
														<?php if($_user['videos'] == 0) { ?>
															<span style="font-size:11px;color:grey;">This user has not uploaded a video yet.</span>
														<?php } ?>
														<script>
															var custom_labels_channel = {
																custom_title: 	    $("#custom_title"),
																custom_labels_dom:  $("#custom_labels"),
																custom_description: $("#custom_description"),
															}

															function open_custom_labels() {
																if(channel_customization_module.featured_channels_opened) 
																	{ $(custom_labels_channel.custom_labels_dom).fadeOut(100); 
																	channel_customization_module.featured_channels_opened = false; }
																else
																	{ $(custom_labels_channel.custom_labels_dom).fadeIn(100); 
																	channel_customization_module.featured_channels_opened = true; }
															}

															function custom_labels_finish() {
																console.log(custom_labels_channel.custom_title.val());
																console.log(custom_labels_channel.custom_description.val());

																$("#custom_label_title_change").text(custom_labels_channel.custom_title.val());
																$("#custom_label_description_change").text(custom_labels_channel.custom_description.val());

																$.post("/d/channel_update",
																{
																	custom_label_title: custom_labels_channel.custom_title.val(),
																	custom_label_description: custom_labels_channel.custom_description.val(),
																},
																function(data, status){
																	alerts++;
																	addAlert("editsuccess_" + alerts, "Successfully updated your channel!");
																	showAlert("#editsuccess_" + alerts);
																});
															}
														</script>
													</div>
													<ul class="gh-single-playlist">
                                                        <?php 
                                                            while($video = $stmt->fetch(PDO::FETCH_ASSOC)) { 
                                                        ?>
														<li class="blogger-video">
															<div class="video yt-tile-visible">
																<a href="/watch?v=<?php echo $video['rid']; ?>">
																<span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-288 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" alt="Thumbnail" onerror="this.onerror=null;this.src='/dynamic/thumbs/default.jpg';" width="288"><span class="vertical-align"></span></span></span></span><span class="video-time"><?php echo $__time_h->timestamp($video['duration']); ?></span>
																<button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="/watch?v=<?php echo $video['rid']; ?>" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
																Watch Later
																</span>
																<span class="addto-label-error" style="display: none;">
																Error
																</span>
																<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
																</span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
																</span>
																<span class="video-item-content">
																<span class="video-overview">
																<span class="title video-title" title="<?php echo htmlspecialchars($video['title']); ?>"><?php echo htmlspecialchars($video['title']); ?></span>
																</span>
																<span class="video-details">
																<span class="yt-user-name video-owner" dir="ltr"><?php echo htmlspecialchars($_user['username']); ?></span>
																<span class="video-view-count">
																<?php echo $__video_h->fetch_video_views($video['rid']); ?> views
																</span>
																<span class="video-time-published"><?php echo $__time_h->time_elapsed_string($video['publish']); ?></span>
																<span class="video-item-description"><?php echo $__video_h->shorten_description($video['description'], 100); ?></span>
																</span>
																</span>
																</a>
															</div>
														</li>
                                                        <?php } ?>
													</ul>
												</div>
											</div>
										</div>
										<div class="secondary-pane"><?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/secondary_pane.php"); ?></div>
									</div>
								</div>
							