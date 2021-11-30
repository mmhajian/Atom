<template>
    <div>
        <div>
            <div class="title-div">
                <div>
                    <img class="img-title" src="/images/atom.svg" alt="Atom">
                </div>
                <div>
                    <img class="img-title-text" src="/images/atomtitletext.png" alt="Atom Title">
                </div>
            </div>
            <div>
                <form action="/explore" method="get">
                    <div class="div-atom">
                        <input class="input-atom" type="text" name="query" id="atom" placeholder="Please enter atom" required>
                    </div>
                    <div class="params">
                        <label for="param"></label>
                        <select name="param" id="param" class="param" onchange="atomPholder()" required>
                            <option value="name">Atom Name</option>
                            <option value="number">Atomic Number</option>
                            <option value="mass">Atomic Mass</option>
                            <option value="symbol">Symbol</option>
                            <option value="isotopes">Isotopes</option>
                            <option value="neutrons">Number of Neutrons</option>
                            <option value="stability">Atom Stability</option>
                        </select>
                    </div>
                    <div class="div-submit">
                        <button class="btn-submit" type="submit">Get</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log("View");
        }
    }
</script>
