<section class="ftr-bttm">
	<div class="container">
		<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2" style="padding: 60px 0px;">
			<div class="max-w-7xl mx-auto px-6">
				<div class="p-2 rounded-lg bg-yellow-100">
					<div class="flex items-center justify-between flex-wrap">
						<div class="w-0 flex-1 items-center hidden md:inline">
							<h2 class="h1">
                            {!! trans('cookie-consent::texts.message') !!}
							</h2>
						</div>
						<div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto" style="text-align: center;">
							
							<button style="background-color: #2A4250; color: #ffffff; border-radius: 25px;padding: 1.5rem 6rem; border: none; cursor: pointer; font-size: 1.6rem; border-radius: 25px;" class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-yellow-800 bg-yellow-400 hover:bg-yellow-300">
							{{ trans('cookie-consent::texts.agree') }}
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>