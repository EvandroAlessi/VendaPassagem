<div class="HEADER | " p>
	<div b></div>
	<div c> 
		<div class="BAR-TOP | c-container direction-row ch-justify-end ch-gap-1 M-1 V-4" p>
			<div b></div>
			<div c>									
				<a class="PHONE ch-align-center direction-row ch-gap-1 pad-h-2 M-1 V-1" href="tel:<?=$data["telefones"]["principal"]?>" p>
					<div b></div>
					<div c>
						<i class="icon fas fa-phone" style="padding-right: 7px !important;" p></i>
						<div class="text" p><?=$data["telefones"]["principal"]?></div>
					</div>
				</a>		
			</div>
		</div>
		<div class="BAR-MAIN | c-container direction-row M-1 ch-gap-2 ch-align-center" p>
			<div b></div>
			<div c>
				<div class="LOGO direction-row ch-align-end ch-justify-center " p>
					<div b></div>
					<div c>
						<a class="WRAP ch-align-center ch-justify-center M-0 " href="<?=$baseurl?>" p>
							<div b></div>
							<div c>
								<img class="image" src="<?=$baseurl?>images/logo.png" p />
							</div>
						</a>
					</div>
				</div>
				<div class="MENU grow direction-row ch-gap-2 stretch" p>
					<div b></div>
					<div c>
						<a class="item ch-justify-center" p href="<?=$baseurl?>">
							<div b></div>
							<div c>
								<div class="text" p>HOME</div>
							</div>
						</a>
						<a class="item ch-justify-center" p href="<?=$baseurl?>cas.php">
							<div b></div>
							<div c>
								<div class="text" p>CASES</div>
							</div>
						</a>
						<a class="item ch-justify-center" p href="<?=$baseurl?>quem-somos.php">
							<div b></div>
							<div c>
								<div class="text" p>QUEM SOMOS</div>
							</div>
						</a>
						<a class="item ch-justify-center" p href="http://skydoc.com.br/" target="_blank">
							<div b></div>
							<div c>
								<div class="text" p>SKYDOC</div>
							</div>
						</a>
						<a class="item ch-justify-center" p href="<?=$baseurl?>contato.php">
							<div b></div>
							<div c>
								<div class="text" p>CONTATO</div>
							</div>
						</a>
					</div>
				</div>
				<div class="SOCIAL direction-row ch-gap-2" p>
					<div b></div>
					<div c>
						<!--<a class="item ch-align-center ch-justify-center" href="http://facebook.com/<?=$data["social"]["facebook"]?>" target="_blank" p>
							<div b></div>
							<div c>
								<i class="icon fab fa-facebook-f" p></i>
							</div>
						</a>
						<a class="item ch-align-center ch-justify-center" href="http://linkedin.com/in/<?=$data["social"]["linkedin"]?>" target="_blank" p>
							<div b></div>
							<div c>
								<i class="icon fab fa-linkedin-in" p></i>
							</div>
						</a>-->
						<a class="item ch-align-center ch-justify-center" href="mailto:<?=$data["emails"]["principal"]?>" p>
							<div b></div>
							<div c>
								<i class="icon far fa-envelope" p></i>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>