<?php include('.\layouts\header.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
    <body>
        <div class="container mt-5">
            <div class="card mx-auto" style="max-width: 400px;">
                <div class="card-body">

                    <h2 class="card-title text-center mb-4">
                        Descubra seu signo
                    </h2>

                    <form method="POST" action="show_zodiac_sign.php">

                        <label class="form-label">
                            Data de nascimento
                        </label>

                        <input
                            type="date"
                            name="data_nascimento"
                            class="form-control mb-3"
                            required
                        >

                        <button type="submit" class="btn btn-primary w-100">
                            Descobrir
                        </button>

                    </form>

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>