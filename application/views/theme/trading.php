<style>
      .content {
        color: green;

        position: absolute;
        margin: 10rem auto auto 17rem;

      }
    </style>

    <!-- ================ Inner page header ================ -->
    <div class="iner-page-header" style="">

      <div class="slider-caption-box  content">
        <p class="ani_l lgsm" style="margin-left:160px;">Life Game Share Trading</p>
        <h2 class="ani_right" style="margin-left:85px; color:#16638f;">LGSM For Traders</h2>
        <p></p>
        <a class="btn-style-1 ani_top" style="margin-left:160px;" href="about.php">Know More</a>
      </div>
      <a href=""> <img src="<?php echo base_url()?>theme1_assets/img/trading-image.jpg" alt=""></a>


    </div>
    <!-- ================ Inner page header end ================ -->


    <!-- ================  Trading section start ================ -->
    <div class="privacy-policy-page" style="margin-top:-55px;">
      <div class="container">
        <div class="privacy-policy-single-content">
          <h3 class="mb-15 action_l ">LGSM Trading</h3>
          <p class="action_l center">Life Game Share Trading is a captivating and innovative concept that introduces a dynamic twist to traditional stock trading by incorporating elements of gaming, fun, and education. It's a unique fusion of entertainment and investment, offering participants an exciting way to engage with the complexities of financial markets while enjoying the thrill of competition. Let's dive into this exhilarating world where gaming and share trading come together to create an exceptional and immersive experience.</p><br>
          <p class="action_l center">Trading is mostly prevalent in the stock market as numerous people buy and sell shares of listed entities. The price of these shares changes every second and a trader can pick a favourable direction to make a gain.</p>
          <br>

        </div>
      </div>
    </div>
    <!-- ================  Trading section end ================ -->

    <!-- ================  Trading section start ================ -->
    <div class="privacy-policy-page">
      <div class="container">
        <div class="privacy-policy-single-content">
          <h3 class="mb-15 action_l">How It Work </h3>
          <p class="action_l center">In Life Game Share Trading, participants are provided with a virtual trading platform. They have the opportunity to buy and sell virtual shares, experiment with various trading strategies, and observe the performance of their virtual portfolios. The games are designed to replicate real market conditions, complete with price fluctuations, market news updates, and other factors that influence stock prices.</p><br>
          <p class="action_l center">Trading is mostly prevalent in the stock market as numerous people buy and sell shares of listed entities. The price of these shares changes every second and a trader can pick a favourable direction to make a gain.</p>
          <br>

        </div>
      </div>
    </div>
    <!-- ================  Trading section end ================ -->

    <?php
$x=$this->db->select('tr.id,tr.user_id,sum(tr.topup_amount) as total,m.name as name')->from('topup_record as tr')->join('member as m','m.id=tr.user_id','left')->group_by('tr.user_id')->limit(10)->get()->result_array();
// echo "hi<h1>".$this->db->last_query()."</h1>";
$user_id=array();
$amount=array();
$name=array();
$color=array();

foreach($x as $i=>$x)
{
  $user_id[$i]=$x['user_id'];
  $amount[$i]=$x['total']; 
  $name[$i]=$x['name']; 
  $color[$i]='#FF000'.$i; 

}
?>

    <!-- graph repersentation start -->
    <div class="container text-center">
      <canvas id="myChart" style="width:100%;max-width:600px; margin:10px auto"></canvas>
    </div>

    <script>
const xValues = <?php echo json_encode($name);?>;
const yValues = <?php echo json_encode($amount);?>;
const barColors = <?php echo json_encode($color);?>;

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Top 10 Investor"
    }
  }
});
</script>
    <!-- graph repersentation end -->



    <!-- ================ Type of Trading section start ================ -->
    <div class="privacy-policy-page">
      <div class="container">
        <div class="row">
          <div class="col-md-7" style="text-align:justify;">
            <div class="privacy-policy-single-content action_l">

              <h3 class="mb-15 action_l">Types of trading</h3>
              <p style="font-size:16px;">Listed below are the major types of trading strategies prevalent in the market.</p>
              <p style="margin-top:15px;"><b>1. Day trading</b></p>
              <p>It is a type of trading where traders buy &amp; sell stocks within a single day, from 9:15 am to 3:30 pm. In day trading, the trader purchases the stock, holds it for a few minutes or hours and concludes the transaction before the market closes.</p>

              <div class="">
                <p style="margin-top:15px;"><b>2. Swing trading</b></p>
              </div>
              <div class="">
                <p>In swing trading, a trader usually purchases a stock and holds it for several days or a week to capitalise on the short-term stock patterns &amp; trends. These traders must have adequate knowledge of stock trends and patterns to execute their trades successfully.</p>

              </div>

              <div class="">
                <p style="margin-top:15px;"><b>3. Scalping or micro trading</b></p>
              </div>
              <div class="">
                <p>Scalp trading</a> is a type of trading in which traders buy and sell stocks in large quantities repeatedly several times within a day. This may result in profits even with minute changes in the stock price. However, there is also a high probability of losses.</p>
              </div>

              <div class="">
                <p style="margin-top:15px;"><b>4. Momentum trading</b></p>
              </div>
              <div class="">
                <p>Momentum trading</a> is a strategy where a certain stock price moves either upwards and downwards for a certain period, i.e., it gains momentum. When the peak is reached, a downtrend follows; therefore, traders take a selling position at the peak of a stock’s momentum.</p>

              </div>
              <hr>





            </div>

          </div>
          <div class="col-md-5 action_r">
            <img src="<?php echo base_url()?>theme1_assets/img/about/about-img-1.png" alt="">
            <img src="<?php echo base_url()?>theme1_assets/img/about/about-img-3.png" alt="">
          </div>
        </div>
      </div>
      <!-- ================ Type of Trading section end ================ -->




      <!-- ================ Advantage of Trading section start ================ -->
      <div class="privacy-policy-page" style="margin-bottom:55px;">
        <div class="container">
          <div class="privacy-policy-single-content" style="margin-top:-55px;">

            <h3 class="mb-15 action_l">Benefits of LGSM Trading</h3>
            <p style="font-size:16px;">The skills acquired through Life Game Share Trading can be directly applied to actual stock trading, helping individuals make more informed and confident investment decisions.</p>
            <div class="action_l">

              <p style="margin-top:15px;"><b>1.Potential Real-World Application:</b></p>
              <p> Trading provides the opportunity to achieve significant profits within a relatively short time frame. When executed with the right strategy at the right time, traders can capitalise on market movements to generate substantial returns on their investments.</p>
            </div>

            <div class="action_l">

              <p style="margin-top:15px;"><b>2. Day trading</b></p>
              <p> Trading provides the opportunity to achieve significant profits within a relatively short time frame. When executed with the right strategy at the right time, traders can capitalise on market movements to generate substantial returns on their investments.</p>
            </div>



            <div class="action_r">
              <p style="margin-top:15px;"><b>3. Flexibility</b></p>
            </div>
            <div class="action">
              <p> Trading is inherently flexible. Traders have the freedom to buy and sell securities as and when it seems appropriate. This flexibility allows investors to adapt to changing market conditions and capitalise on opportunities.</p>

            </div>

            <div class="action_l center">
              <p style="margin-top:15px; text-align:justify;"><b>4.Access to a growing economy:</b></p>
            </div>
            <div class="action">
              <p> Active participation in trading, especially in sizeable trades, provides traders with direct exposure to the economic growth of the country. When a market index increases in value, it signifies the economic expansion of the nation. Therefore, professional traders can benefit from the growing economy by strategically investing in assets influenced by this growth.</p>
            </div>

            <div class="action_r">
              <p style="margin-top:15px;"><b>5. Take advantage of economic growth:</b></p>
            </div>
            <div class="action">
              <p> Trading allows investors to leverage economic growth. A growing economy often translates to increased corporate earnings due to job creation, higher income levels, and increased consumer spending. Investors can capitalise on this by investing in businesses poised for growth in response to economic expansion.</p>

            </div>

            <div class="action_l">
              <p style="margin-top:15px; text-align:justify;"><b>6. Easy buying and selling</b></p>
            </div>
            <div class="action">
              <p> The process of buying and selling shares in the stock market is straightforward and accessible to all investors. It begins with opening a Demat account, which can be done through a broker, financial planner, or online mode. Setting up an account is a quick process, taking about 15 minutes, and allows investors to initiate their investment journey. Once the account is established, investors can conveniently place buy and sell orders to engage in trading activities.</p>

            </div>


            <div class="action_l">
              <p style="margin-top:15px;"><b>7. Flexibility for small investments</b></p>
            </div>
            <div class="action">
              <p> Even new investors can start with a relatively small amount by purchasing stocks of small-cap or mid-cap companies in smaller units. This accessibility is ideal for those who want to test the waters of trading with limited capital.</p>

            </div>



          </div>
        </div>
      </div>
      <!-- ================ Advantage of Trading section end ================ -->
