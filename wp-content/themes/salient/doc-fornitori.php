<div id="pdoc" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section   " style="padding-top: 0px; padding-bottom: 0px; ">
	<div class="row-bg-wrap instance-0">
		<div class="row-bg    " style="" data-color_overlay="" data-color_overlay_2="" data-gradient_direction="" data-overlay_strength="0.3" data-enable_gradient="false"></div>
	</div>
	<div class="col span_12 dark left">
		<div class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding instance-0" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
			<div class="vc_column-inner">
				<div class="wpb_wrapper">

					<div class="wpb_text_column wpb_content_element">
						<div class="wpb_wrapper">
							<h1><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Doc Fornitori' ) ) ); ?>" class="fornitori">Fornitori</a> / <? echo $fornitore_rag_soc; ?></h1>
							<h2>Offerte</h2>
						</div>
					</div> <!-- chiudo titolo sottotitolo-->

					<div class="toggles " data-style="default">

					<?php
						$rows = get_field($fornitore_categ_offerte);
						if($rows)

						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Casa') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Casa - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Casa') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_offerte);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Condomini') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Condomini - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Condomini') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_offerte);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Micro') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Micro - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Micro') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_offerte);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pmi Basso') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Pmi Basso - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pmi Basso') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_offerte);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pmi Alto') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Pmi Alto - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pmi Alto') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_offerte);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pmi Standard') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Pmi Standard - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pmi Standard') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_offerte);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pmi Personalizzata') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Pmi Personalizzata - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pmi Personalizzata') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_offerte);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pubbliche Amministrazioni') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Pubbliche Amministrazioni - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pubbliche Amministrazioni') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_offerte);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Allegati') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Allegati - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Allegati') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

					?>

				</div> <!-- chiudo toogles offerte-->

					<div class="wpb_text_column wpb_content_element">
						<div class="wpb_wrapper">
							<h2>Modulistica</h2>
						</div>
					</div> <!-- chiudo sottotitolo-->

					<div class="toggles " data-style="default">

					<?
						$rows = get_field($fornitore_categ_modulistica);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Contratti') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Contratti - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Contratti') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_modulistica);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Iva Agevolata') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Iva Agevolata - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Iva Agevolata') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_modulistica);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Moduli Accise') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Moduli Accise - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Moduli Accise') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_modulistica);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pratiche Business') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Pratiche Business - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pratiche Business') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_modulistica);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pratiche Privati') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Pratiche Privati - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Pratiche Privati') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_modulistica);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Richiesta Offerte') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Richiesta Offerte - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Richiesta Offerte') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

					?>

				</div> <!-- chiudo toogles modulistica-->

					<div class="wpb_text_column wpb_content_element">
						<div class="wpb_wrapper">
							<h2>Documentazione</h2>
						</div>
					</div> <!-- chiudo sottotitolo-->

					<div class="toggles " data-style="default">

					<?
						$rows = get_field($fornitore_categ_documentazione);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Manuali') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Manuali - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Manuali') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_documentazione);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Presentazione Azienda') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Presentazione Azienda - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Presentazione Azienda') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

						$rows = get_field($fornitore_categ_documentazione);
						/*asort($rows);*/
						if($rows)
						{
							$conta = 0;
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Rassegna Stampa') { $conta ++; }
							}

							echo '
							<div class="toggle default"><h3><a href="#"><i class="icon-plus-sign"></i>Rassegna Stampa - <span>'.$conta.' documenti</span></a></h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<ul class="dlm-downloads">
							';
							foreach($rows as $row)
							{
								if ($row['categoria'] == 'Rassegna Stampa') {?>
								<li><a class="download-link" title="" href="<? echo $row['carica_pdf']['url']; ?>" target="_blank" rel="nofollow"><? echo $row['carica_pdf']['filename']; ?></a></li>
							<?}
							}
							echo '
										</ul>
									</div>
								</div>
							</div>
						</div>
							';
						}

					?>

				</div> <!-- chiudo toogles documentazione-->

				</div>
			</div>
		</div>
	</div>
</div>
