
<button id="back-to-top" class="back-to-top">
    <span>&uarr;</span>
</button>

<style>
    .back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: linear-gradient(45deg, #ff0000, #0000ff);
        color: white;
        border: none;
        border-radius: 50%;
        font-size: 24px;
        cursor: pointer;
        display: none;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .back-to-top:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
    }

    .back-to-top span {
        display: inline-block;
        transform: translateY(-2px);
    }
</style>

<script>

    window.onscroll = function() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            document.getElementById("back-to-top").style.display = "flex";
        } else {
            document.getElementById("back-to-top").style.display = "none";
        }
    };

    document.getElementById("back-to-top").onclick = function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
</script>
