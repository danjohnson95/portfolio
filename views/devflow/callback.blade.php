<style>
	body{
		font-family:BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
		-webkit-font-smoothing: antialiased;
		font-size: 14px;
		background-color:#fafafa;
		color: rgba(0,0,0,0.7);
		text-align: center;
	}

	h1{
		font-weight: 400;
		margin: 2em;
	}

	.large{
		font-size: 1.5em;
	}

	.large .box{
		border: 1px solid rgba(0,0,0,0.2);
		padding: 1em;
		border-radius: 5px;
		font-size: 1.2em;
		background-color: #fff;
		display: inline-block;
		margin: 1em 0;
	}

	.sub{
		color: rgba(0,0,0,0.4);
		margin: 2em;
	}

	small{
		position: fixed;
		bottom: 1em;
		right: 1em;
		color: rgba(0,0,0,0.3);
	}
</style>

<h1>Devflow</h1>

<div>

	<div class="large">
		<div class="box">{{$code}}</div>
		<div>is your authorisation code</div>
	</div>

	<div class="sub">
		Go back to Devflow and enter this code to link your BitBucket account
	</div>

	<small>
		<strong>Why do I need to do this?</strong>
		Due to a limitation on Windows, we're unable to automatically send the code back to Devflow.
	</small>

</div>

<!--devflow://code-->
